<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Autocomplete extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // ASP
    public function searchAsp()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://asp.tracks-app.com/restapi/master/origin/android/progi/?key=753453551d67646fb16eaf3c4a6a7405',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=ik2v5n06kbqg3699cvd6q4p1e7'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->id] = array('value' => $i->id, 'label' => $i->nama);
        }

        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
        // echo $result;
    }

    public function searchAsp1()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://asp.tracks-app.com/restapi/master/destination/android/progi/?key=753453551d67646fb16eaf3c4a6a7405',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=ppipgvtfi1nl7llhpcrio1udg6'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->ID] = array('value' => $i->ID, 'label' => $i->kabName);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
    }

    // Terbang
    public function searchTerbang()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://terbangexp.tracks-app.com/restapi/master/origin/android/progi/?key=753453551d67646fb16eaf3c43457405',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=hoh6e7a3mvu0k56uv92v8fhrb1'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->id] = array('value' => $i->id, 'label' => $i->nama);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
        // echo $result;
    }

    public function searchTerbang1()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://terbangexp.tracks-app.com/restapi/master/destination/android/progi/?key=753453551d67646fb16eaf3c43457405',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=cssu0374oscj9vi0i4di2ic7l5'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->ID] = array('value' => $i->ID, 'label' => $i->kabName);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
    }

    // MWX
    public function searchMwx()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mwx.tracks-app.com/restapi/master/origin/android/progi/?key=300dfaa09d3079dbf9af803a6ae42209',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=hoh6e7a3mvu0k56uv92v8fhrb1'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->id] = array('value' => $i->id, 'label' => $i->nama);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
        // echo $result;
    }

    public function searchMwx1()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mwx.tracks-app.com/restapi/master/destination/android/progi/?key=300dfaa09d3079dbf9af803a6ae42209',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: PHPSESSID=cssu0374oscj9vi0i4di2ic7l5'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->ID] = array('value' => $i->ID, 'label' => $i->kabName);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
    }


    // Nafast
    public function searchNafast()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nafast.tracks-app.com/restapi/master/origin/android/progi/?key=753453551d67646fb1sdgf3c4a6a7405',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'token_gateway: QDQYzUDndtpvqV3EUQK9kThygEr5j49Z',
                'token_user: 8w8gnPSh91L4hGMnooAKSdw0Bc3pshrj',
                'user: mobilev2',
                'Content-Type: application/json',
                'puskesmas: 31710002',
                'Cookie: PHPSESSID=nsf8o1kv5n1tj956k7lv99g730'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->id] = array('value' => $i->id, 'label' => $i->nama);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
        // echo $result;
    }

    public function searchNafast1()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nafast.tracks-app.com/restapi/master/destination/android/progi/?key=753453551d67646fb1sdgf3c4a6a7405',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'token_gateway: QDQYzUDndtpvqV3EUQK9kThygEr5j49Z',
                'token_user: 8w8gnPSh91L4hGMnooAKSdw0Bc3pshrj',
                'user: mobilev2',
                'Content-Type: application/json',
                'puskesmas: 31710002',
                'Cookie: PHPSESSID=nsf8o1kv5n1tj956k7lv99g730'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $isi = json_decode($response);
        foreach ($isi->data as $i) {
            // $datas[$i->ID] = $i->kabName;
            $datas[$i->ID] = array('value' => $i->ID, 'label' => $i->kabName);
        }
        $input = $this->input->get('term'); // ambil dari parameter yg diketik
        $result = array_filter($datas, function ($item) use ($input) {
            if (stripos($item['label'], $input) !== false) {
                return true;
            }
            return false;
        });
        echo json_encode($result);
    }
}