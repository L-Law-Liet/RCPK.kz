<style>

    /* Style the buttons inside the tab */
    .tab button {
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
    }
    .tab-content li {
        border-bottom: 1px solid #ccc;
    }
</style>

{{--App Modal--}}
<div class="modal_gov modal_code_gov">
    <div class="fullScreen flex-center p-0">
        <div class="modal__box__gov row"
             style="background: white; overflow-y: auto; width: 100%; height: 100vh;">
            <div class="col-md-12">
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'London')">@lang('loc.ministr')</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">@lang('loc.akim')</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">@lang('loc.other')</button>
                </div>

                <div id="London" class="tabcontent" style="display:block;">
                    <ul>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/qriim">
                                @lang('loc.min_in_act_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/entities/dsm">
                                @lang('loc.min_zdr_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600"
                               href="https://www.gov.kz/memleket/entities/miid">
                                @lang('loc.min_ind_inf')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600"
                               href="https://www.gov.kz/memleket/entities/mfa">
                                @lang('loc.min_inostr_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/qogam">
                                @lang('loc.min_inf_soc')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/mcs">
                                @lang('loc.min_cult_sport')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/economy">
                                @lang('loc.min_nat_ec_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/mod">
                                @lang('loc.min_def_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/edu">
                                @lang('loc.min_edu_sci')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/moa">
                                @lang('loc.min_agr_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/mti">
                                @lang('loc.min_trade')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/enbek">
                                @lang('loc.min_trud')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/minfin">
                                @lang('loc.min_fin_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/mdai">
                                @lang('loc.min_dig_evo')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/ecogeo">
                                @lang('loc.min_eco_geo')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/energo">
                                @lang('loc.min_energy')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/adilet">
                                @lang('loc.min_justice')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/emer">
                                @lang('loc.min_chs')
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="Paris" class="tabcontent">
                    <ul>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/aqmola">
                                @lang('loc.akim_akmola')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600"
                               href="https://www.gov.kz/memleket/entities/aktobe">
                                @lang('loc.akim_aktobe')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600"
                               href="https://www.gov.kz/memleket/entities/zhetysu">
                                @lang('loc.akim_alm_obl')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/atyrau">
                                @lang('loc.akim_atyrau')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/akimvko">
                                @lang('loc.akim_vko')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/almaty">
                                @lang('loc.akim_alm')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/astana">
                                @lang('loc.alim_ast')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/shymkent">
                                @lang('loc.akim_shym')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/zhambyl">
                                @lang('loc.akim_zham')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/bko">
                                @lang('loc.akim_zko')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/karaganda">
                                @lang('loc.akim_karaganda')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/kostanay">
                                @lang('loc.akim_kostanai')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/kyzylorda">
                                @lang('loc.akim_kysyl')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/mangystau">
                                @lang('loc.akim_mangys')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/pavlodar">
                                @lang('loc.akim_pavl')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/sko">
                               @lang('loc.akin_sko')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/ontustik">
                                @lang('loc.akim_turk')
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <ul>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/qyzmet">
                                @lang('loc.ag_gov_job')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/anticorruption">
                                @lang('loc.ag_corruption')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600"
                               href="https://www.gov.kz/memleket/entities/zk">
                                @lang('loc.ag_def')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600"
                               href="https://www.gov.kz/memleket/entities/ardfm">
                                @lang('loc.ag_reg_fin')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/esep">
                                @lang('loc.schet_com_control')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/sgork">
                                @lang('loc.service_gov_sec')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/afm">
                                @lang('loc.ag_fin_mon')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/vss">
                                @lang('loc.high_sud_sov')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/shekaraknb">
                                @lang('loc.border_serv_com_nat_sec')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/ombudsman">
                                @lang('loc.auth_right_hum')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/antiterrosticheskiy-centr">
                                @lang('loc.antiterror_center_rk')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/prokuror">
                                @lang('loc.gen_prok')
                            </a>
                        </li>
                        <li class="m-2 p-2" style="border-bottom: 1px solid #ccc">
                            <a style="color: black; font-weight: 600" href="https://www.gov.kz/memleket/entities/aspr">
                                @lang('loc.ag_strategy_plan')
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-100 w-25"></div>
            </div>
        </div>
    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
