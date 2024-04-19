<?php

namespace App\Livewire\Admin;

use App\Models\client;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.index');
    }
    public function download(){
        // dd('dl');
    $now = Carbon::now()->toDateTimeString();
    
    $fileName = 'HOKA-'.$now.'.csv';
    $clients = client::all();
    
    $headers = array(
        "Content-type"        => "text/csv",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma"              => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires"             => "0"
    );
    $columns = array('id', 'name', 'email', 'phone','scan date','save file','created at');

    // dd($clients);

    $callback = function() use($clients, $columns) {
        // dd('call back');
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach ($clients as $client) {
            $row['id']  = $client->id;
            $row['name']    = $client->name;
            $row['email']    = $client->email;
            $row['phone']    = $client->phone;
            $row['scan date']    = $client->scandate;
            $row['save file']  = isset($client->remember_token)?1:0;
            $row['created_at']  = $client->created_at??"-";
            
            
            fputcsv($file, array($row['id'], $row['name'], $row['email'], $row['phone'], $row['scan date'], $row['save file'], $row['created_at']));
        }

        fclose($file);
        // dd($file);
    };

    return response()->stream($callback, 200, $headers);
    }
}
