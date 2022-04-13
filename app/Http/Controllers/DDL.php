<?php

use App\Models\countries;

class htmlHelper
{
    public function __construct()
    {
    }

    public function HTMLgenetaor()
    {
        $result = file_get_contents('http://95.217.89.96/MapleVoipFilter/apiManager/getSabyArray/Null/Null/ON/1');
        $resultEncoded = json_decode($result);
        $fullString = '';
        foreach ($resultEncoded as $row) {
            if ($row->{'saby_vpn_type'} == 'Wire-XpressVpn') {
                $vpnType = 'Wire-Xpress';
            } else {
                $vpnType = $row->{'saby_vpn_type'};
            }
            $lastActivationTime = $row->{'saby_last_activation_time'};
            $fullString .= '<tr data-id="' . $row->{'id'} . '" data-status="' . $row->{'saby_main_state'} . '" data-desciption="' . $row->{'saby_extra_state'} . '">';
            $fullString .= '<td><center><input name="' . $row->{'saby_full_name'} . '" class="row-check-box" type="checkbox" /></center>' . "</td>";
            $fullString .= '<td>' . $row->{'saby_full_name'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_mini_name'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_emulator_alpha'} . '</td>';
            $fullString .= '<td><a role=button class="' . $row->{'main_status_class'} . '">' . $row->{'saby_main_state'} . '</a></td>';
            $fullString .= '<td><a role=button class="' . $row->{'extra_status_class'} . '">' . $row->{'saby_extra_state'} . '</a></td>';
            $fullString .= '<td>3.14</td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_limit_open_time'}) . '" title="' . $row->{'saby_limit_open_time'} . '"></td>';
            $fullString .= '<td>' . $row->{'saby_call_limit'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_call_remain'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_socket_port'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_app'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_last_caller'} . '</td>';
            $fullString .= '<td>' . $row->{'saby_last_callee'} . '</td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($lastActivationTime) . '" title="' . $lastActivationTime . '"></td>';
            $fullString .= '<td class="spanago"  data-sort="' . strtotime($row->{'saby_uptime'}) . '" title="' . $row->{'saby_uptime'} . '"></td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_last_update'}) . '" title="' . $row->{'saby_last_update'} . '"></td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_last_attempt'}) . '" title="' . $row->{'saby_last_attempt'} . '"></td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_last_answer'}) . '" title="' . $row->{'saby_last_answer'} . '"></td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_global_last_attempt'}) . '" title="' . $row->{'saby_global_last_attempt'} . '"></td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_bahavior_last_attempt'}) . '" title="' . $row->{'saby_bahavior_last_attempt'} . '"></td>';
            $fullString .= '<td class="spanago" data-sort="' . strtotime($row->{'saby_bahavior_last_answer'}) . '" title="' . $row->{'saby_bahavior_last_answer'} . '"></td>';
            $fullString .= '<td>' . str_replace('master-', '', $row->{'saby_version'}) . '</td>';
            $fullString .= '<td>' . $row->{'saby_app_number'} . '</td>';
            $fullString .= '<td>' . $vpnType . '</td>';
            $fullString .= '<td>' . $row->{'saby_vpn_region'} . '</td>';
            $fullString .= '</tr>';
        }

        return $fullString;
    }

    public function print_out_countries()
    {
        $countries = new countries();
        $countriesData = $countries->all();
        return $countriesData;
    }
}
