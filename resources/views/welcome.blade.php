@extends('layouts.newLayout')
@section('main_content')
    <div id="flHorizontalForm" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="table-responsive mt-3" style="zoom: 95%;padding-bottom: 100px;">
            <table>
                <thead>
                    <script src="dist/timeago.js" type="text/javascript"></script>
                    <tr>
                        <input type="text" class="form-control" placeholder=" Search..." id="TableSearchBox">
                    </tr>
                    <tr>
                        <th class="text-center p-3" data-name="id"><input id="checkAll" type="checkbox" /></th><!-- 0 -->
                        <th class="text-center p-3" data-name="saby_full_name">Saby</th><!-- 1 -->
                        <th class="text-center p-3" data-name="saby_mini_name">Name</th><!-- 2 -->
                        <th class="text-center p-3" data-name="saby_emulator_alpha">On</th><!-- 3 -->
                        <th class="text-center p-3" data-name="saby_main_state">State</th><!-- 4 -->
                        <th class="text-center p-3" title="State Details" data-name="saby_extra_state">Details</th>
                        <th class="text-center p-3" title="CPU Load AVG">C.L.A</th>
                        <th class="text-center p-3" title="Limit Open Date" data-name="saby_limit_open_time">L.O.D</th>
                        <th class="text-center p-3" title="Limit" data-name="saby_call_limit">L</th>
                        <th class="text-center p-3" title="Remain" data-name="saby_call_remain">R</th>
                        <th class="text-center p-3" data-name="saby_socket_port">Port</th>
                        <th class="text-center p-3" data-name="saby_app">Profile</th>
                        <th class="text-center p-3" data-name="saby_last_caller">Src</th>
                        <th class="text-center p-3" data-name="saby_last_callee">Dest</th>
                        <th class="text-center p-3" data-name="saby_last_activation_time">Active</th>
                        <th class="text-center p-3" data-name="saby_uptime">Uptime</th>
                        <th class="text-center p-3" data-name="saby_last_update">Last update</th>
                        <th class="text-center p-3" title="Last Attempt" data-name="saby_last_attempt">L.Att</th>
                        <th class="text-center p-3" title="Last Answered" data-name="saby_last_answer">L.Ans</th>
                        <th class="text-center p-3" title="Global Last Attempt" data-name="saby_global_last_attempt">G.L.Att
                        </th>
                        <th class="text-center p-3" title="Behavior Last Attempt" data-name="saby_bahavior_last_attempt">
                            B.L.Att</th>
                        <th class="text-center p-3" title="Behavior Last Answered" data-name="saby_bahavior_last_answer">
                            B.L.Ans</th>
                        <th class="text-center p-3" data-name="saby_version">Ver</th>
                        <th class="text-center p-3" data-name="saby_app_number">Number</th>
                        <th class="text-center p-3" data-name="saby_vpn_type">VPN</th>
                        <th class="text-center p-3" data-name="saby_vpn_region">Region</th>
                    </tr>
                </thead>
                <tbody>
                    {!! $table !!}
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.timeago.min.js"> </script>
    <script>
        $(document).ready(function() {
            jQuery(".spanago").timeago();
        });
    </script>
@endsection
