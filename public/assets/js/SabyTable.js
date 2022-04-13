$("#vpn-type-select").on('change', function() {
    var vpnProvider = $(this).val();
    $("#vpn-select").empty().append($('<option value="random">Random Region</option>'));
    var sameActivation = $("#activation-type").is(":checked") ? "same" : "diff"
    $.ajax({
        url: "apiManager/getAllVpnRegionsAdvanced/" + $("#vpn-type-select").val() + "/" + $("#provider-select").val() + "/" + sameActivation + "/" + $("#RateMin").val() + "/" + $("#RateMax").val(),
        success: function(result) {
            var data = JSON.parse(result);
            $(data.map(function(vpnRegion) {
                switch (vpnProvider) {
                    case "ExpressVPN":
                    case "Surfshark":
                    case "PIA":
                    case "HotSpot":
                    case "Strong":
                    case "PureVpn":
                    case "NordVpn":
                    case "NordVpn":
                    case "Wire-XpressVpn":
                    case "Xen-express":
                        var $option = $('<option value="' + vpnRegion.Country + '">' + vpnRegion.Country + '</option>');
                        break;

                    default:
                        var $option = $('<option value="' + vpnRegion.region_code + '">' + vpnRegion.region + ' - ' + vpnRegion.city + '</option>');
                        break;
                }
                $option.appendTo($("#vpn-select"));
                return $option;
            }));
        }
    });
});

$("#activation-type").on('change', function() {
    var activationType = $(this).val();
    var vpnProvider = $("#vpn-type-select").val();
    $("#provider-select").empty();
    $("#vpn-select").empty().append($('<option value="random">Random Region</option>'));
    var activationType = $("#activation-type").is(":checked") ? "same" : "diff";
    if (activationType == "same") {
        $("#provider-select").append($('<option value="5S">5Sim</option>'));
        $("#provider-select").append($('<option value="SmsActivate">SmsActivate</option>'));
        $("#sim-select").empty();
        $("#sim-select").append($('<option value="random">Random Country</option>'));
        $("#sim-select").prop("disabled", true);
        $.ajax({
            url: "apiManager/getAllVpnRegionsAdvanced/" + $("#vpn-type-select").val() + "/" + $("#provider-select").val() + "/" + activationType + "/" + $("#RateMin").val() + "/" + $("#RateMax").val(),
            success: function(result) {
                var data = JSON.parse(result);
                $(data.map(function(vpnRegion) {
                    switch (vpnProvider) {
                        case "ExpressVPN":
                        case "Surfshark":
                        case "PIA":
                        case "HotSpot":
                        case "Strong":
                        case "PureVpn":
                        case "NordVpn":
                        case "NordVpn":
                        case "Wire-XpressVpn":
                        case "Xen-express":
                            var $option = $('<option value="' + vpnRegion.Country + '">' + vpnRegion.Country + '</option>');
                            break;

                        default:
                            var $option = $('<option value="' + vpnRegion.region_code + '">' + vpnRegion.region + ' - ' + vpnRegion.city + '</option>');
                            break;
                    }
                    $option.appendTo($("#vpn-select"));
                    return $option;
                }));
            }
        });
    } else {
        $.ajax({
            url: "apiManager/getAllVpnRegionsAdvanced/" + $("#vpn-type-select").val() + "/" + $("#provider-select").val() + "/" + activationType + "/" + $("#RateMin").val() + "/" + $("#RateMax").val(),
            success: function(result) {
                var data = JSON.parse(result);
                $(data.map(function(vpnRegion) {
                    switch (vpnProvider) {
                        case "ExpressVPN":
                        case "Surfshark":
                        case "PIA":
                        case "HotSpot":
                        case "Strong":
                        case "PureVpn":
                        case "NordVpn":
                        case "NordVpn":
                        case "Wire-XpressVpn":
                        case "Xen-express":
                            var $option = $('<option value="' + vpnRegion.Country + '">' + vpnRegion.Country + '</option>');
                            break;

                        default:
                            var $option = $('<option value="' + vpnRegion.region_code + '">' + vpnRegion.region + ' - ' + vpnRegion.city + '</option>');
                            break;
                    }
                    $option.appendTo($("#vpn-select"));
                    return $option;
                }));
            }
        });
        $("#sim-select").prop("disabled", false);
        var selected = 'selected';
        $.ajax({
            url: "apiManager/getAllSimProviders",
            success: function(result) {
                var data = JSON.parse(result);
                $(data.map(function(simProvider) {
                    var $option = $('<option value="' + simProvider.provider_code + '"' + selected + ' >' + simProvider.provider_name + '</option>');
                    selected = '';
                    $option.appendTo($("#provider-select"))
                    return $option;
                }));
            }
        });
    }
}).trigger('change');

$("#provider-select").on('change', function() {
    $("#sim-select").empty();
    $("#sim-select").append($('<option value="random">Random Country</option>'));
    $.ajax({
        url: "apiManager/getSimProviderCountries/" + $(this).children("option:selected").val() + "/" + $("#RateMin").val() + "/" + $("#RateMax").val(),
        success: function(result) {
            var data = JSON.parse(result);
            $(data.map(function(simCountry) {
                var rate = (simCountry.country_wa_rate * 0.014).toFixed(2)
                var $option = $('<option value="' + simCountry.key + '">' + simCountry.value + '</option>');
                $option.appendTo($("#sim-select"));
                return $option;
            }));
        }
    });
}).trigger('change');

function allowCommand(cmd, objDetail) {
    var result = true;
    objDetail.apiUrl = 'http://127.0.0.1';

    objDetail.getVPNProvider = function() {
        var $select = $("#vpn-type-select"),
            vpnProvider = $select.val();
        return vpnProvider;
    }

    objDetail.getActivationType = function() {
        var activationType = $("#activation-type").is(":checked") ? "same" : "diff"
        return activationType;
    }

    var globaleVpnRegion = '';

    objDetail.getVPNRegion = function() {
        var $select = $("#vpn-select"),
            vpnRegion = $select.val();
        if (vpnRegion === "random") {
            var options = $select.find("option");
            vpnRegion = options.eq(Math.floor(Math.random() * options.length) + 1).val();
            if (vpnRegion === undefined) {
                vpnRegion = options.eq(options.length - 1).val();
            }
        }
        var isExist = vpnRegion.includes(" - ");
        if (isExist) {
            vpnArray = vpnRegion.split(" - ");
            vpnRegion = vpnArray[0];
            globaleVpnRegion = vpnArray[1];
        } else {
            globaleVpnRegion = vpnRegion;
        }

        return vpnRegion;
    }

    objDetail.getSimProvider = function() {
        var $select = $("#provider-select"),
            provider = $select.val();
        return provider;
    }

    objDetail.getSimCountry = function() {
        if ($("#sim-select").is(':enabled')) {
            var $select = $("#sim-select"),
                sim = $select.val();
            if (sim === "random") {
                $.ajax({
                    async: false,
                    url: "apiManager/getRandomSimProviderCountry/" + objDetail.getSimProvider(),
                    success: function(result) {
                        data = JSON.parse(result);
                        if (data == null) {
                            var options = $select.find("option");
                            sim = options.eq(options.length - 1).val();
                        } else {
                            sim = data.country_id;
                        }
                    }
                });
            }
        } else {
            sim = globaleVpnRegion;
        }
        return sim;
    }

    return result;
}


function sendCmdAll(cmd) {
    var objDetail = {};
    if (allowCommand(cmd, objDetail)) {
        var count = $(".row-check-box:checked").length;
        $("#totalSelected").html("Wait Sending Commands : " + count);
        $(".row-check-box:checked").each(function() {
            var cmdUrl = "/MapleVoipFilter/apiManager/sabyCmd/" + this.name + '/' + cmd + '/' + objDetail.getVPNProvider() + '/' + objDetail.getActivationType() + '/' + objDetail.getVPNRegion() + '/' + objDetail.getSimProvider() + '/' + objDetail.getSimCountry();
            $.ajax({
                url: cmdUrl,
                dataType: 'jsonp',
                jsonpCallback: 'jsonCallback',
                async: false,
                complete: function() {
                    count--;
                    if (count < 1) {
                        getSabyTable();
                        $("#totalSelected").html("Total Selected: 0");
                        document.getElementById("checkAll").checked = false;
                        $('#checkAll').prop('checked', false);
                        $('.row-check-box').prop('checked', false);
                        getSabyTable();
                    } else {
                        $("#totalSelected").html("Wait Sending Commands : " + count);
                    }

                }
            });
        });
        $("#totalSelected").empty();
        $('.row-check-box').prop("checked", false);
    }
}

function sendCmd(saby, cmd) {
    var objDetail = {};
    if (allowCommand(cmd, objDetail)) {
        var cmdUrl = "/MapleVoipFilter/apiManager/sabyCmd/" + saby + '/' + cmd + '/' + objDetail.getVPNProvider() + '/' + objDetail.getActivationType() + '/' + objDetail.getVPNRegion() + '/' + objDetail.getSimProvider() + '/' + objDetail.getSimCountry();
        $.ajax({
            url: cmdUrl,
            dataType: 'jsonp',
            jsonpCallback: 'jsonCallback',
            success: function(json) {
                $('#checkAll').prop('checked', false);
                $('.row-check-box').prop('checked', false);
                getSabyTable();
            }
        });
    }
}

function detailCommand(cmd, objDetail) {
    var result = true;

    objDetail.getValue = function() {
        var value = 0;
        switch (cmd) {
            case 'daily_limit':
                value = $("#callLimit").val();
                break;
            case 'activation_flag_on':
                value = 1;
                break;
            case 'activation_flag_off':
                value = 0;
                break;
            case 'ProfileCode':
                value = $("#application-select").val();
                break;
            case 'setBehavior':
                value = this.closest('a').attr('id');
                break;
            case 'setLable':
                value = this.closest('a').attr('id');
                break;
        }
        return value;
    }

    objDetail.getAction = function() {
        var action = '';
        switch (cmd) {
            case 'daily_limit':
                action = $("#call-limit-action").val();
                break;
            case 'activation_flag_on':
                action = 'set';
                break;
            case 'activation_flag_off':
                action = 'unset';
                break;
            case 'ProfileCode':
                action = 'changeProfileCode';
                break;
            case 'setBehavior':
                action = 'setBehavior';
                break;
            case 'setLabel':
                action = 'setLabel';
                break;
        }
        return action;
    }

    objDetail.getDailyLimit = function(param) {

    }
    return result;
}

function setSabyDetails(saby, cmd) {
    var objDetail = {};
    if (detailCommand(cmd, objDetail)) {
        var cmdUrl = "/MapleVoipFilter/apiManager/sabyDetail/" + saby + '/' + cmd + '/' + objDetail.getAction() + '/' + objDetail.getValue();
        $.ajax({
            url: cmdUrl,
            dataType: 'jsonp',
            jsonpCallback: 'jsonCallback',
            success: function(json) {
                $('#checkAll').prop('checked', false);
                $('.row-check-box').prop('checked', false);
                getSabyTable();
            }
        });
    }
}

function setSabyDetailsAll(cmd) {
    var objDetail = {};
    if (detailCommand(cmd, objDetail)) {
        var count = $(".row-check-box:checked").length;
        $("#totalSelected").html("Wait Sending Commands : " + count);
        $(".row-check-box:checked").each(function() {
            var cmdUrl = "/MapleVoipFilter/apiManager" + "/sabyDetail/" + this.name + '/' + cmd + '/' + objDetail.getAction() + '/' + objDetail.getValue();
            $.ajax({
                url: cmdUrl,
                dataType: 'jsonp',
                jsonpCallback: 'jsonCallback',
                async: false,
                complete: function() {
                    count--;
                    if (count < 1) {
                        getSabyTable();
                        $("#totalSelected").html("Total Selected: 0");
                        document.getElementById("checkAll").checked = false;
                        $('#checkAll').prop('checked', false);
                        $('.row-check-box').prop('checked', false);
                        getSabyTable();
                    } else {
                        $("#totalSelected").html("Wait Sending Commands : " + count);
                    }
                }
            });
        });
    }
}

function setSabyExtraDetailsAll(cmd, item) {
    var objDetail = {};
    if (detailCommand(cmd, objDetail)) {
        var count = $(".row-check-box:checked").length;
        $("#totalSelected").html("Wait Sending Commands : " + count);
        $(".row-check-box:checked").each(function() {
            var cmdUrl = "/MapleVoipFilter/apiManager" + "/sabyDetail/" + this.name + '/' + cmd + '/' + objDetail.getAction() + '/' + item;
            $.ajax({
                url: cmdUrl,
                dataType: 'jsonp',
                jsonpCallback: 'jsonCallback',
                async: false,
                complete: function() {
                    count--;
                    if (count < 1) {
                        $('#data').dataTable().fnDraw();
                        $("#totalSelected").html("Total Selected: 0");
                        document.getElementById("checkAll").checked = false;
                        $('#checkAll').prop('checked', false);
                        $('.row-check-box').prop('checked', false);
                        getSabyTable();
                    } else {
                        $("#totalSelected").html("Wait Sending Commands : " + count);
                    }
                }
            });
        });
    }
}

function setSabyExtraDetails(saby, cmd, item) {
    var objDetail = {};
    if (detailCommand(cmd, objDetail)) {
        var cmdUrl = "/MapleVoipFilter/apiManager" + "/sabyDetail/" + saby + '/' + cmd + '/' + objDetail.getAction() + '/' + item;
        $.ajax({
            url: cmdUrl,
            dataType: 'jsonp',
            jsonpCallback: 'jsonCallback',
            success: function(json) {
                $('#checkAll').prop('checked', false);
                $('.row-check-box').prop('checked', false);
                getSabyTable();
            }
        });
    }
}