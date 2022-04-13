<!--  BEGIN TOPBAR  -->
<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="home.php">
                    <img src="assets/img/logo.png" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="home.php" class="nav-link"> Maple Systems
                </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu" id="dashboard">
                <a href="home.php">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Home</span>
                    </div>
                </a>
            </li>
            <li class="menu single-menu" id="SettingsMenu">
                <a href="#Settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-cpu">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                            <rect x="9" y="9" width="6" height="6"></rect>
                            <line x1="9" y1="1" x2="9" y2="4"></line>
                            <line x1="15" y1="1" x2="15" y2="4"></line>
                            <line x1="9" y1="20" x2="9" y2="23"></line>
                            <line x1="15" y1="20" x2="15" y2="23"></line>
                            <line x1="20" y1="9" x2="23" y2="9"></line>
                            <line x1="20" y1="14" x2="23" y2="14"></line>
                            <line x1="1" y1="9" x2="4" y2="9"></line>
                            <line x1="1" y1="14" x2="4" y2="14"></line>
                        </svg>
                        <span>Settings</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="Settings" data-parent="#topAccordion">
                    <li id="callerCalleeRanges">
                        <a href="callerCalleeRanges.php"> Caller & Callee Ranges </a>
                    </li>
                    <li id="callsMissed">
                        <a href="callsMissed.php"> Missed Calls Definition</a>
                    </li>
                    <li id="callsShort">
                        <a href="callsShort.php"> Short Calls Definition</a>
                    </li>
                    <li id="sipGroups">
                        <a href="sipGroups.php"> Sip Codes & Groups </a>
                    </li>
                    <li id="offlineCallee">
                        <a href="offlineCallee.php"> Offline Callee </a>
                    </li>
                    <li id="applications">
                        <a href="applications.php"> Applications </a>
                    </li>
                    <li id="applicationsUpdate">
                        <a href="application_update.php"> Applications Update</a>
                    </li>
                    <li id="hangupReasonsMapping">
                        <a href="hangupReasonsMapping.php"> Reasons Mapping</a>
                    </li>
                    <li id="dropdown_settings">
                        <a href="dropdown_settings.php"> Dropdown settings</a>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu" id="TrunksMenu">
                <a href="#Trunks" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-zap">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        <span>Trunks</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="Trunks" data-parent="#topAccordion">
                    <li id="opTrunks">
                        <a href="opTrunks.php"> OP Trunks </a>
                    </li>
                    <li id="tpTrunks">
                        <a href="tpTrunks.php"> TP Trunks </a>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu" id="RoutingMenu">
                <a href="#Routing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-git-pull-request">
                            <circle cx="18" cy="18" r="3"></circle>
                            <circle cx="6" cy="6" r="3"></circle>
                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                            <line x1="6" y1="9" x2="6" y2="21"></line>
                        </svg>
                        <span>Routing</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="Routing" data-parent="#topAccordion">
                    <li id="Templates">
                        <a href="Templates.php"> Templates </a>
                    </li>
                    <li id="Countries">
                        <a href="Countries.php"> Countries </a>
                    </li>
                    <li id="standardRouting">
                        <a href="StandardRouting.php"> Standard Routing </a>
                    </li>
                    <li id="advancedRouting">
                        <a href="advancedRouting.php"> Advanced Routing </a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="ratesMenu">
                <a href="#rateList" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-phone-call">
                            <path
                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <span>Rate & Capacity</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="rateList" data-parent="#topAccordion">
                    <li id="ratesOperator">
                        <a href="{{ url('addOperator') }}"> Operators </a>
                    </li>
                    <li id="prefixOperator">
                        <a href="OperatorPrefix.php"> Operator Prefix </a>
                    </li>
                    <li id="CapacityOperator">
                        <a href="CapacityOperator.php"> Capacity </a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="numbersList">
                <a href="#Testing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-phone-outgoing">
                            <polyline points="23 7 23 1 17 1"></polyline>
                            <line x1="16" y1="8" x2="23" y2="1"></line>
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <span>Numbers</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="numbersList" data-parent="#topAccordion">
                    <li id="WhiteNumbersI">
                        <a href="whiteCallers.php"> White Callers </a>
                    </li>
                    <li id="BlackCallers">
                        <a href="blackCallers.php"> Black Callers</a>
                    </li>
                    <li id="FilteredNumbers">
                        <a href="filteredNumbers.php"> Filtered Numbers </a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="MoraselMenu">
                <a href="#Morasel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span>Morasel</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="Morasel" data-parent="#topAccordion">
                    <li id="MoraselView" class="SABYSTATE">
                        <a id="SABYSTATE" href="sabyTable.php">WhatsApp Saby State</a>
                    </li>
                    <li id="MoraselView" class="SABYSTATE2">
                        <a id="SABYSTATE2" href="sabyTable-2.php">Saby State WhatsApp-2</a>
                    </li>
                    <li id="MoraselView" class="SABYSTATE2Viber">
                        <a id="SABYSTATE2" href="sabyTable-2-viber.php"> Viber Saby State </a>
                    </li>
                    <li id="MoraselView" class="SABYSTATEFILTER">
                        <a id="SABYSTATE" href="sabyTablewithFilter.php"> Saby State with filters WhatsApp </a>
                    </li>
                    <li id="MoraselView" class="lablesSettings">
                        <a id="SABYSTATE" href="LablesSettings.php"> Saby Labels </a>
                    </li>
                    <li id="MoraselView" class="SabyLabelTable">
                        <a id="SABYSTATE" href="sabyTablewithLabels.php"> Saby In Labels </a>
                    </li>
                    <li id="MoraselView" class="SABYACTIVATION">
                        <a id="SABYACTIVATION" href="sabyActivationwithFilter.php"> Saby Activation </a>
                    </li>
                    <li id="MoraselView" class="SABTCONFIG">
                        <a href="sabyConfig.php"> Configs </a>
                    </li>
                    <li id="MoraselView" class="SABYSTATEUPDATE">
                        <a href="status_update.php"> Status Config </a>
                    </li>
                    <li id="VNCsGenerate" class="">
                        <a href="generateVNC.php">VNC's Generate</a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="CdrMenu">
                <a href="#CDRLIST" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-phone-forwarded">
                            <polyline points="19 1 23 5 19 9"></polyline>
                            <line x1="15" y1="5" x2="23" y2="5"></line>
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <span>CDR</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="CDRLIST" data-parent="#topAccordion">
                    <li id="CDRTable" class="cdrDetalis">
                        <a id="CDRTable" href="cdrTable_date.php"> CDR Details</a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="statisticsMenu">
                <a href="#Morasel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trending-up">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg>
                        <span>Statistics</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="Morasel" data-parent="#topAccordion">
                    <li id="StatisticsCountry" class="">
                        <a href="statisticsCountry.php">Country Calls</a>
                    </li>
                    <li id="StatisticsServer" class="">
                        <a href="statisticsServer.php">Server Calls</a>
                    </li>
                    <li id="StatisticsClientes" class="">
                        <a href="statisticsClientes.php">Clientes Calls</a>
                    </li>
                    <li id="StatisticsVPN" class="">
                        <a href="statisticsVPN.php">VPN Calls</a>
                    </li>
                    <li id="StatisticsGlobal" class="">
                        <a href="statisticsGlobal.php">Global</a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="VPNManagmentMenu">
                <a href="#VPNManagmentMenuList" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-monitor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        <span>VPN Managment</span>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="VPNManagmentMenuList" data-parent="#topAccordion">
                    <li id="vpnManagmentID" class="">
                        <a href="vpnManagment.php">Wire-guard family</a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="aliasLinksMenu">
                <a href="#aliasLinks" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-star">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <span>favorite list</span>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="aliasLinks" data-parent="#topAccordion">
                </ul>
            </li>
            <li class="menu single-menu" id="marqueeMenu">
                <a href="#aliasLinks" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-star">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <span>Marquee list</span>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="marqueeMenu" data-parent="#topAccordion">
                    <li id="Marquee" class="">
                        <a href="Marquee.php" target="_blank">Marquee</a>
                    </li>
                    <li id="Marquee-2" class="">
                        <a href="Marquee-2.php" target="_blank">Marquee-2</a>
                    </li>
                    <li id="Marquee-moayad" class="">
                        <a href="Marqueem.php" target="_blank">Marquee Moayad</a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu" id="GlancesMenu">
                <a href="http://95.217.89.96:61208" target="_blank" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-monitor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        <span>Glances</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!--  END TOPBAR  -->
