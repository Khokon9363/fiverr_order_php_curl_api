<?php 

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.remitbee.com/public-services/online-rates');
    $result = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($result, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charSet="utf-8"/>
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            padding: 13px 111px 29px 43px;
            background: transparent;
            border: none;
            outline: none;
            margin-left: -42px;
            font-weight: bold;
        }
        input:focus{
            /* background-color: red; */
        }
        h4,li{
            font-weight: bold;
            padding-bottom: 15px;
            padding-top: 15px;
            padding-left: 10px;
        }
    </style>
    <script>
        var api = <?php echo json_encode($obj['rates']); ?>;
    </script>
</head>
<body>

<div class="jss185 false " style="background:url(Penguins.jpg) no-repeat center;background-size:cover">
    <div class="MuiGrid-root jss190 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6">
        <div class="MuiBox-root jss247 jss239  ">
            <div class="MuiPaper-root MuiCard-root jss243 MuiPaper-elevation1 MuiPaper-rounded">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-4">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12">
                        <div class="jss249"><div>
                        <div class="MuiPaper-root jss255 MuiPaper-elevation1 MuiPaper-rounded">
                        <div class="MuiFormControl-root jss256">
                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="input1"></label>
                        <div class="MuiInputBase-root jss257 MuiInputBase-formControl">
                        <input type="text" placeholder="You send" id="youSend" onkeyup="calculate()">
                        </div>
                        </div>
                        <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss259 MuiButton-textPrimary" tabindex="0" type="button" aria-label="directions" aria-haspopup="true">
                        <span class="MuiButton-label">
                            <img class="jss260" alt="CA" src="https://unpkg.com/react-flag-kit@0.3.1/assets/CA.svg" style="height:24px;width:24px;display:inline-block"/>CAD
                        </span>
                        </button>
                        </div>
                        </div>
                        <div class="jss250"></div>
                        <div style="position:relative">
                        <svg class="jss254" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g transform="translate(1979.111 -14743.889)">
                        <circle cx="12" cy="12" r="12" transform="translate(-1979.111 14743.889)" fill="rgba(152,187,255)"></circle>
                        <circle cx="8" cy="8" r="8" transform="translate(-1975.111 14747.889)" fill="#1060F8"></circle>
                        <circle cx="4" cy="4" r="4" transform="translate(-1971.111 14751.889)" fill="#fff"></circle>
                        </g>
                        </svg>
                        <div class="jss251">
                            <div class="jss252">Exchange rate: <span style="color: #2EBC31;">1.00 CAD -> <span id="countryRate"></span> <span id="countryName"></span></span></div>
                                <div class="jss253">
                                </div>
                            </div>
                        </div>
                        <div>
                        <div class="MuiPaper-root jss255 MuiPaper-elevation1 MuiPaper-rounded">
                        <div class="MuiFormControl-root jss256">
                            <input type="text" placeholder="They Receive" id="theyReceive" onkeyup="calculate2()">
                            <div class="MuiInputBase-root jss257 MuiInputBase-formControl">
                            </div>
                        </div>
                            <button onclick="myFunc()" class="MuiButtonBase-root MuiButton-root MuiButton-text jss259 MuiButton-textPrimary" tabindex="0" type="button" aria-label="directions" aria-haspopup="true">
                                    <img class="jss260" id="drpdwnCountryImage" src="https://unpkg.com/react-flag-kit@0.3.1/assets/IN.svg" style="height:24px;width:24px;display:inline-block"/>
                                <span class="MuiButton-label" id="drpdwnCountryName">
                                    INR
                                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <script>
                            function myFunc(){
                                var list = document.getElementById('list');
                                if (list.style.display === "none") {
                                        list.style.display = "block";
                                    } else {
                                        list.style.display = "none";
                                    }
                            }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-justify-xs-center MuiGrid-grid-xs-12">
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-align-items-xs-center MuiGrid-justify-xs-center MuiGrid-grid-xs-6">
                        <p class="MuiTypography-root jss244 MuiTypography-body1">Our transfer fee</p>
                        <p class="MuiTypography-root jss245 MuiTypography-body2"><b>From 0.00 CAD</b></p>
                    </div>
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-align-items-xs-center MuiGrid-justify-xs-center MuiGrid-grid-xs-6">
                        <p class="MuiTypography-root jss244 MuiTypography-body1">Estimated delivery</p>
                        <p class="MuiTypography-root jss245 MuiTypography-body2"><b>January <?php echo date('d')+1;?>th</b></p>
                    </div>
                       
                    </div>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12">
                    <a class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-containedSizeLarge MuiButton-sizeLarge MuiButton-fullWidth" tabindex="0" aria-disabled="false" href="">
                        <span class="MuiButton-label">Send now</span>
                    </a>
                </div>
            </div>
        <ul id="list" style="list-style-type: none;padding-top: 0px;position: relative;margin-left: 197px;margin-top: -214px;background: white; display: none;overflow-x: auto;height: 300px;" class="MuiList-root jss812 MuiList-padding" style="background-color: white;">
            <li class="MuiListItem-root MuiListItem-gutters">
                <div class="MuiFormControl-root MuiFormControl-fullWidth">
                    <p class="MuiTypography-root MuiTypography-body1" style="color: rgb(107, 112, 143); padding-top: 6px;">Type country</p>
                    <div class="MuiFormControl-root MuiTextField-root" style="margin-top: 5px;width: 96%;">
                        <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd">
                            <input aria-invalid="false" onkeyup="myFunction()" type="text" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd" id="myInput">
                            <div class="MuiInputAdornment-root">
                                <button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button">
                                    <span class="MuiIconButton-label">
                                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                        </svg>
                                    </span>
                                    <span class="MuiTouchRipple-root"></span>
                                </button>
                            </div>
                            <fieldset aria-hidden="true" class="jss451 MuiOutlinedInput-notchedOutline" style="padding-left: 8px;"><legend class="jss452" style="width: 0.01px;"><span>&#8203;</span></legend></fieldset></div></div></div></li><li class="MuiListItem-root MuiListItem-gutters"><h4 class="MuiTypography-root MuiTypography-h4">Popular countries</h4></li><hr class="MuiDivider-root">
                            
                            <div onclick="selectOption(0)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false">
                                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1">
                                        <img alt="IN" src="https://unpkg.com/react-flag-kit@0.3.1/assets/IN.svg" style="height: 22px; width: 22px; display: inline-block;">
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10">
                                        <h4 class="MuiTypography-root MuiTypography-h4">(INR) Indian Rupee</h4>
                                    </div>
                                </div>
                                <span class="MuiTouchRipple-root"></span>
                            </div>

                                <div onclick="selectOption(1)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="LK" src="https://unpkg.com/react-flag-kit@0.3.1/assets/LK.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(LKR) Sri Lanka Rupee </h4></div></div><span class="MuiTouchRipple-root"></span></div><div id="EUR" onclick="selectOption(2)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="FR" src="https://unpkg.com/react-flag-kit@0.3.1/assets/FR.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) French Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div id="GBP" onclick="selectOption(3)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="GB" src="https://unpkg.com/react-flag-kit@0.3.1/assets/GB.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(GBP) Pound Sterling </h4></div></div><span class="MuiTouchRipple-root"></span></div><div id="CHF" onclick="selectOption(4)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="CH" src="https://unpkg.com/react-flag-kit@0.3.1/assets/CH.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(CHF) Swiss Franc </h4></div></div><span class="MuiTouchRipple-root"></span></div><div id="AUD" onclick="selectOption(5)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="AU" src="https://unpkg.com/react-flag-kit@0.3.1/assets/AU.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(AUD) Australian Dollar </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(6)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="SG" src="https://unpkg.com/react-flag-kit@0.3.1/assets/SG.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(SGD) Singapore Dollar </h4></div></div><span class="MuiTouchRipple-root"></span></div><br><li class="MuiListItem-root MuiListItem-gutters"><h4 class="MuiTypography-root MuiTypography-h4">All countries</h4></li><hr class="MuiDivider-root"><div onclick="selectOption(7)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="US" src="https://unpkg.com/react-flag-kit@0.3.1/assets/US.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(USD) US Dollar </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(8)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="MY" src="https://unpkg.com/react-flag-kit@0.3.1/assets/MY.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(MYR) Malaysian Ringgit </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(9)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="NO" src="https://unpkg.com/react-flag-kit@0.3.1/assets/NO.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(NOK) Norwegian Krone </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(10)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="DE" src="https://unpkg.com/react-flag-kit@0.3.1/assets/DE.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) German Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(11)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="CZ" src="https://unpkg.com/react-flag-kit@0.3.1/assets/CZ.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(CZK) Czech Koruna </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(12)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="DK" src="https://unpkg.com/react-flag-kit@0.3.1/assets/DK.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(DKK) Danish Krone </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(13)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="HU" src="https://unpkg.com/react-flag-kit@0.3.1/assets/HU.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(HUF) Forint </h4></div></div><span class="MuiTouchRipple-root"></span></div><br><br><div onclick="selectOption(14)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="PL" src="https://unpkg.com/react-flag-kit@0.3.1/assets/PL.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(PLN) Zloty </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(15)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false">
                                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="SE" src="https://unpkg.com/react-flag-kit@0.3.1/assets/SE.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(SEK) Swedish Krona </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(16)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="ES" src="https://unpkg.com/react-flag-kit@0.3.1/assets/ES.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Spanish Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(17)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="NL" src="https://unpkg.com/react-flag-kit@0.3.1/assets/NL.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Netherlands Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(18)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="NZ" src="https://unpkg.com/react-flag-kit@0.3.1/assets/NZ.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(NZD) New Zealand Dollar </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(19)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="LU" src="https://unpkg.com/react-flag-kit@0.3.1/assets/LU.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Luxembourg Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(20)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="AE" src="https://unpkg.com/react-flag-kit@0.3.1/assets/AE.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(AED) UAE Dirham </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(21)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="HK" src="https://unpkg.com/react-flag-kit@0.3.1/assets/HK.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(HKD) Hong Kong Dollar </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(22)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="JP" src="https://unpkg.com/react-flag-kit@0.3.1/assets/JP.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(JPY) Yen </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(23)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="MX" src="https://unpkg.com/react-flag-kit@0.3.1/assets/MX.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(MXN) Mexican Peso </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(24)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="SA" src="https://unpkg.com/react-flag-kit@0.3.1/assets/SA.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(SAR) Saudi Riyal </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(25)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="ZA" src="https://unpkg.com/react-flag-kit@0.3.1/assets/ZA.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(ZAR) Rand </h4></div></div><span class="MuiTouchRipple-root"></span></div><br><br><div onclick="selectOption(26)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="TH" src="https://unpkg.com/react-flag-kit@0.3.1/assets/TH.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(THB) Baht </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(27)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="TR" src="https://unpkg.com/react-flag-kit@0.3.1/assets/TR.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(TRY) Turkish Lira </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(28)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="AD" src="https://unpkg.com/react-flag-kit@0.3.1/assets/AD.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Andorra Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(29)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="BE" src="https://unpkg.com/react-flag-kit@0.3.1/assets/BE.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Belgian Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(30)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="AT" src="https://unpkg.com/react-flag-kit@0.3.1/assets/AT.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Austrian Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(31)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="CY" src="https://unpkg.com/react-flag-kit@0.3.1/assets/CY.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Cypriot Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(32)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="EE" src="https://unpkg.com/react-flag-kit@0.3.1/assets/EE.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Estonian Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(33)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="FI" src="https://unpkg.com/react-flag-kit@0.3.1/assets/FI.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Finnish Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(34)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="GR" src="https://unpkg.com/react-flag-kit@0.3.1/assets/GR.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Greek Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(35)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="IE" src="https://unpkg.com/react-flag-kit@0.3.1/assets/IE.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Irish Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(36)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="IT" src="https://unpkg.com/react-flag-kit@0.3.1/assets/IT.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Italian Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(37)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="MT" src="https://unpkg.com/react-flag-kit@0.3.1/assets/MT.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Maltese Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(38)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="MC" src="https://unpkg.com/react-flag-kit@0.3.1/assets/MC.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Monaco Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(39)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="ME" src="https://unpkg.com/react-flag-kit@0.3.1/assets/ME.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Montenegro Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(40)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="PT" src="https://unpkg.com/react-flag-kit@0.3.1/assets/PT.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Portuguese Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(41)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="SM" src="https://unpkg.com/react-flag-kit@0.3.1/assets/SM.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(42)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="SK" src="https://unpkg.com/react-flag-kit@0.3.1/assets/SK.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Slovakia Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(43)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="SI" src="https://unpkg.com/react-flag-kit@0.3.1/assets/SI.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(EUR) Slovenia Euro </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(44)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="QA" src="https://unpkg.com/react-flag-kit@0.3.1/assets/QA.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(QAR) Qatari Rial </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(45)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="CN" src="https://unpkg.com/react-flag-kit@0.3.1/assets/CN.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(CNY) Yuan Renminbi </h4></div></div><span class="MuiTouchRipple-root"></span></div><div onclick="selectOption(46)" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1"><img alt="PH" src="https://unpkg.com/react-flag-kit@0.3.1/assets/PH.svg" style="height: 22px; width: 22px; display: inline-block;"></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-align-items-xs-center MuiGrid-grid-xs-10"><h4 class="MuiTypography-root MuiTypography-h4">(PHP) Philippine Peso </h4></div></div><span class="MuiTouchRipple-root"></span></div></ul>
        </div>

    </div>
</div>
</div>
        <script>
            var youSend = document.getElementById('youSend');
            var theyReceive = document.getElementById('theyReceive');
            var countryRate = document.getElementById('countryRate');
            var countryName = document.getElementById('countryName');
            var drpdwnCountryName = document.getElementById('drpdwnCountryName');
            var drpdwnCountryImage = document.getElementById('drpdwnCountryImage');

            var INR = api[0];

            countryRate.innerHTML = INR['rate'];
            countryName.innerHTML = INR['country_code'];

            youSend.value = 1000+'.00';

            theyReceive.value = (youSend.value * countryRate.innerHTML)+'.00';

            function calculate(){
                theyReceive.value = youSend.value * countryRate.innerHTML;
            }

            function calculate2(){
                youSend.value = theyReceive.value / countryRate.innerHTML;
            }

            function selectOption(e){
                INR = api[e];
                console.log(INR);
                
                countryRate.innerHTML = INR['rate'];
                countryName.innerHTML = INR['country_code'];
                drpdwnCountryName.innerHTML = INR['country_code'];
                switch (e) {
                    case 0:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/IN.svg';
                        break;
                    case 1:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/LK.svg';
                        break;
                    case 2:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/FR.svg';
                        break;
                    case 3:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/GB.svg';
                        break;
                    case 4:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/CH.svg';
                        break;
                    case 5:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/AU.svg';
                        break;
                    case 6:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SG.svg';
                        break;
                    case 7:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/US.svg';
                        break;
                    case 8:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/MY.svg';
                        break;
                    case 9:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/NO.svg';
                        break;
                    case 10:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/DE.svg';
                        break;
                    case 11:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/CZ.svg';
                        break;
                    case 12:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/DK.svg';
                        break;
                    case 13:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/HU.svg';
                        break;
                    case 14:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/PL.svg';
                        break;
                    case 15:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SE.svg';
                        break;
                    case 16:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/ES.svg';
                        break;
                    case 17:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/NL.svg';
                        break;
                    case 18:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/NZ.svg';
                        break;
                    case 19:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/LU.svg';
                        break;
                    case 20:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/AE.svg';
                        break;
                    case 21:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/Hk.svg';
                        break;
                    case 22:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/JP.svg';
                        break;
                    case 23:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SA.svg';
                        break;
                    case 24:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/ZA.svg';
                        break;
                    case 25:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/TH.svg';
                        break;
                    case 26:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/TR.svg';
                        break;
                    case 27:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/AD.svg';
                        break;
                    case 28:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/BE.svg';
                        break;
                    case 29:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/AT.svg';
                        break;
                    case 30:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/CY.svg';
                        break;
                    case 31:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/EE.svg';
                        break;
                    case 32:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/FI.svg';
                        break;
                    case 33:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/GR.svg';
                        break;
                    case 34:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/IE.svg';
                        break;
                    case 35:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/IT.svg';
                        break;
                    case 36:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/MT.svg';
                        break;
                    case 37:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/MC.svg';
                        break;
                    case 38:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/ME.svg';
                        break;
                    case 39:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/PT.svg';
                        break;
                    case 40:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SM.svg';
                        break;
                    case 41:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SK.svg';
                        break;
                    case 42:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SK.svg';
                        break;
                    case 43:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/SI.svg';
                        break;
                    case 44:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/QA.svg';
                        break;
                    case 45:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/CN.svg';
                        break;
                    case 46:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/PH.svg';
                        break;

                    default:
                        drpdwnCountryImage.src = 'https://unpkg.com/react-flag-kit@0.3.1/assets/LK.svg';
                        break;
                }

                theyReceive.value = youSend.value * countryRate.innerHTML;
            }
            function myFunction() {
                
            }
        </script>
</body>
</html>