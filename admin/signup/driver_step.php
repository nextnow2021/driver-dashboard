<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Driver Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/dstyle.css">
     <link rel="stylesheet" href="css/documentstyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
    $(function () {
        $("#chkVehicle").click(function () {
            if ($(this).is(":checked")) {
                $("#dvVehicle").show();
            } else {
                $("#dvVehicle").hide();
            }
        });
    });
</script>
       <script type="text/javascript">
           $(document).ready(function() {
    $('#vehiclemanufacture').on('change', function() {
        var elements = $('div.container').children().hide(); // hide all the elements
        var value = $(this).val();

        if (value.length) { // if somethings' selected
            elements.filter('.' + value).show(); // show the ones we want
        }
    }).trigger('change');
});
       </script> 
       <script type="text/javascript">
        // Map your choices to your option value
// var lookup = {
//    'Option 1': ['Option 1 - Choice 1', 'Option 1 - Choice 2', 'Option 1 - Choice 3'],
//    'Option 2': ['Option 2 - Choice 1', 'Option 2 - Choice 2'],
//    'Option 3': ['Option 3 - Choice 1'],
// };

// // When an option is changed, search the above for matching choices
// $('#options').on('change', function() {
//    // Set selected option as variable
//    var selectValue = $(this).val();

//    // Empty the target field
//    $('#choices').empty();
   
//    // For each chocie in the selected option
//    for (i = 0; i < lookup[selectValue].length; i++) {
//       // Output choice in the target field
//       $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
//    }
// });
//         $(document).ready(function () {
        
//         var list1 = document.getElementById('firstList');
    
//         list1.options[0] = new Option('--Select--', '');
//         list1.options[1] = new Option('Snacks', 'Snacks');
//         list1.options[2] = new Option('Drinks', 'Drinks');
//         });

//          function getFoodItem(){
//             var list1 = document.getElementById('firstList');
//             var list2 = document.getElementById("secondList");
//             var list1SelectedValue = list1.options[list1.selectedIndex].value;
            
//             if (list1SelectedValue=='Snacks')
//             {
                
//                 list2.options.length=0;
//                 list2.options[0] = new Option('--Select--', '');
//                 list2.options[1] = new Option('Burger', 'Burger');
//                 list2.options[2] = new Option('Pizza', 'Pizza');
//                 list2.options[3] = new Option('Hotdog', 'Hotdog');
//                 list2.options[4] = new Option('Potato Chips', 'Potato Chips');
//                 list2.options[5] = new Option('French Fries', 'French Fries');
                
//             }
//             else if (list1SelectedValue=='Drinks')
//             {
                
//                 list2.options.length=0;
//                 list2.options[0] = new Option('--Select--', '');
//                 list2.options[1] = new Option('Coca Cola', 'Coca Cola');
//                 list2.options[2] = new Option('7up', '7up');
//                 list2.options[3] = new Option('Pepsi', 'Pepsi');
//                 list2.options[4] = new Option('Coffee', 'Coffee');
//                 list2.options[5] = new Option('Tea', 'Tea');
                
//             }
// }
       </script>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-6 col-md-6 col-lg-10 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="border:none;">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal & vehicle info</strong></li>
                            <li class="document_fees" href="#document_fees"><strong>Documents & fees</strong></li>
                            <li id="documents"><strong>Documents</strong></li>
                            <li id="payment"><strong>Payment details</strong></li>
                        </ul>
                    <!-- <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> --> <br> <!-- fieldsets -->
                   <!--  <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div>
                                
                            </div> <label class="fieldlabels">Email: *</label>
                            <input type="email" name="email" placeholder="Email Id"> <label class="fieldlabels">Username: *</label>
                             <input type="text" name="uname" placeholder="UserName"> <label class="fieldlabels">Password: *</label>
                              <input type="password" name="pwd" placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" placeholder="Confirm Password">
                        </div> <input type="button" name="next" class="next action-button" value="Next">
                    </fieldset> -->
                    <!-- <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                
                            </div>
                             <label class="fieldlabels">First Name: *</label>
                                 <input type="text" name="fname" placeholder="First Name">
                             <label class="fieldlabels">Last Name: *</label> 
                                 <input type="text" name="lname" placeholder="Last Name"> 
                             <label class="fieldlabels">Contact No.: *</label> 
                                <input type="text" name="phno" placeholder="Contact No."> 
                             <label class="fieldlabels">Language: *</label> 
                                <select id="languages" name="languages" class="form-control">
    <option value="af">Afrikaans</option>
    <option value="sq">Albanian - shqip</option>
    <option value="am">Amharic - ????????????</option>
    <option value="ar">Arabic - ??????????????</option>
    <option value="an">Aragonese - aragon??s</option>
    <option value="hy">Armenian - ??????????????</option>
    <option value="ast">Asturian - asturianu</option>
    <option value="az">Azerbaijani - az??rbaycan dili</option>
    <option value="eu">Basque - euskara</option>
    <option value="be">Belarusian - ????????????????????</option>
    <option value="bn">Bengali - ???????????????</option>
    <option value="bs">Bosnian - bosanski</option>
    <option value="br">Breton - brezhoneg</option>
    <option value="bg">Bulgarian - ??????????????????</option>
    <option value="ca">Catalan - catal??</option>
    <option value="ckb">Central Kurdish - ?????????? (???????????????? ????????????)</option>
    <option value="zh">Chinese - ??????</option>
    <option value="zh-HK">Chinese (Hong Kong) - ??????????????????</option>
    <option value="zh-CN">Chinese (Simplified) - ??????????????????</option>
    <option value="zh-TW">Chinese (Traditional) - ??????????????????</option>
    <option value="co">Corsican</option>
    <option value="hr">Croatian - hrvatski</option>
    <option value="cs">Czech - ??e??tina</option>
    <option value="da">Danish - dansk</option>
    <option value="nl">Dutch - Nederlands</option>
    <option value="en">English</option>
    <option value="en-AU">English (Australia)</option>
    <option value="en-CA">English (Canada)</option>
    <option value="en-IN">English (India)</option>
    <option value="en-NZ">English (New Zealand)</option>
    <option value="en-ZA">English (South Africa)</option>
    <option value="en-GB">English (United Kingdom)</option>
    <option value="en-US">English (United States)</option>
    <option value="eo">Esperanto - esperanto</option>
    <option value="et">Estonian - eesti</option>
    <option value="fo">Faroese - f??royskt</option>
    <option value="fil">Filipino</option>
    <option value="fi">Finnish - suomi</option>
    <option value="fr">French - fran??ais</option>
    <option value="fr-CA">French (Canada) - fran??ais (Canada)</option>
    <option value="fr-FR">French (France) - fran??ais (France)</option>
    <option value="fr-CH">French (Switzerland) - fran??ais (Suisse)</option>
    <option value="gl">Galician - galego</option>
    <option value="ka">Georgian - ?????????????????????</option>
    <option value="de">German - Deutsch</option>
    <option value="de-AT">German (Austria) - Deutsch (??sterreich)</option>
    <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
    <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
    <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
    <option value="el">Greek - ????????????????</option>
    <option value="gn">Guarani</option>
    <option value="gu">Gujarati - ?????????????????????</option>
    <option value="ha">Hausa</option>
    <option value="haw">Hawaiian - ????lelo Hawai??i</option>
    <option value="he">Hebrew - ??????????</option>
    <option value="hi">Hindi - ??????????????????</option>
    <option value="hu">Hungarian - magyar</option>
    <option value="is">Icelandic - ??slenska</option>
    <option value="id">Indonesian - Indonesia</option>
    <option value="ia">Interlingua</option>
    <option value="ga">Irish - Gaeilge</option>
    <option value="it">Italian - italiano</option>
    <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
    <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
    <option value="ja">Japanese - ?????????</option>
    <option value="kn">Kannada - ???????????????</option>
    <option value="kk">Kazakh - ?????????? ????????</option>
    <option value="km">Khmer - ???????????????</option>
    <option value="ko">Korean - ?????????</option>
    <option value="ku">Kurdish - Kurd??</option>
    <option value="ky">Kyrgyz - ????????????????</option>
    <option value="lo">Lao - ?????????</option>
    <option value="la">Latin</option>
    <option value="lv">Latvian - latvie??u</option>
    <option value="ln">Lingala - ling??la</option>
    <option value="lt">Lithuanian - lietuvi??</option>
    <option value="mk">Macedonian - ????????????????????</option>
    <option value="ms">Malay - Bahasa Melayu</option>
    <option value="ml">Malayalam - ??????????????????</option>
    <option value="mt">Maltese - Malti</option>
    <option value="mr">Marathi - ???????????????</option>
    <option value="mn">Mongolian - ????????????</option>
    <option value="ne">Nepali - ??????????????????</option>
    <option value="no">Norwegian - norsk</option>
    <option value="nb">Norwegian Bokm??l - norsk bokm??l</option>
    <option value="nn">Norwegian Nynorsk - nynorsk</option>
    <option value="oc">Occitan</option>
    <option value="or">Oriya - ???????????????</option>
    <option value="om">Oromo - Oromoo</option>
    <option value="ps">Pashto - ????????</option>
    <option value="fa">Persian - ??????????</option>
    <option value="pl">Polish - polski</option>
    <option value="pt">Portuguese - portugu??s</option>
    <option value="pt-BR">Portuguese (Brazil) - portugu??s (Brasil)</option>
    <option value="pt-PT">Portuguese (Portugal) - portugu??s (Portugal)</option>
    <option value="pa">Punjabi - ??????????????????</option>
    <option value="qu">Quechua</option>
    <option value="ro">Romanian - rom??n??</option>
    <option value="mo">Romanian (Moldova) - rom??n?? (Moldova)</option>
    <option value="rm">Romansh - rumantsch</option>
    <option value="ru">Russian - ??????????????</option>
    <option value="gd">Scottish Gaelic</option>
    <option value="sr">Serbian - ????????????</option>
    <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
    <option value="sn">Shona - chiShona</option>
    <option value="sd">Sindhi</option>
    <option value="si">Sinhala - ???????????????</option>
    <option value="sk">Slovak - sloven??ina</option>
    <option value="sl">Slovenian - sloven????ina</option>
    <option value="so">Somali - Soomaali</option>
    <option value="st">Southern Sotho</option>
    <option value="es">Spanish - espa??ol</option>
    <option value="es-AR">Spanish (Argentina) - espa??ol (Argentina)</option>
    <option value="es-419">Spanish (Latin America) - espa??ol (Latinoam??rica)</option>
    <option value="es-MX">Spanish (Mexico) - espa??ol (M??xico)</option>
    <option value="es-ES">Spanish (Spain) - espa??ol (Espa??a)</option>
    <option value="es-US">Spanish (United States) - espa??ol (Estados Unidos)</option>
    <option value="su">Sundanese</option>
    <option value="sw">Swahili - Kiswahili</option>
    <option value="sv">Swedish - svenska</option>
    <option value="tg">Tajik - ????????????</option>
    <option value="ta">Tamil - ???????????????</option>
    <option value="tt">Tatar</option>
    <option value="te">Telugu - ??????????????????</option>
    <option value="th">Thai - ?????????</option>
    <option value="ti">Tigrinya - ????????????</option>
    <option value="to">Tongan - lea fakatonga</option>
    <option value="tr">Turkish - T??rk??e</option>
    <option value="tk">Turkmen</option>
    <option value="tw">Twi</option>
    <option value="uk">Ukrainian - ????????????????????</option>
    <option value="ur">Urdu - ????????</option>
    <option value="ug">Uyghur</option>
    <option value="uz">Uzbek - o???zbek</option>
    <option value="vi">Vietnamese - Ti???ng Vi???t</option>
    <option value="wa">Walloon - wa</option>
    <option value="cy">Welsh - Cymraeg</option>
    <option value="fy">Western Frisian</option>
    <option value="xh">Xhosa</option>
    <option value="yi">Yiddish</option>
    <option value="yo">Yoruba - ??d?? Yor??b??</option>
    <option value="zu">Zulu - isiZulu</option>
</select>

<div id="selected-language"></div>

 

                                
                        </div> 
                        <br>
                        <div class="checkbox font-large">
                                     <label>
                                    <input type="checkbox" id="chkVehicle" />
                                   I have a vehicle that I will drive.
                                </label>
                                </div>

                            
                                <hr />
                                <div id="dvVehicle" style="display: none">
                                    <div class="form-card">
                                       
                                         <label class="fieldlabels">Vehicle manufacturer
                                                : *</label>
                                          
                                                          <select size="1" id="vehiclemanufacture" title="" name="vehiclemanufacture" class="form-control">
    <option value="">-Select Your Vehicle-</option>
    <option value="audi">Audi</option>
    <option value="volkswagon">Volkswagon</option>
</select>


                                         <label class="fieldlabels">Vehicle model: *</label> 
          


                                        


                                            <div class="container" >
                                            <div class="audi">
                                                <select class="form-control" id="vehiclemodel">
                                                     <option value="">-Select Your Vehicle-</option>
                                                    <option> Audi 1</option>
                                                    <option> Audi 2</option>
                                                    <option> Audi 3</option>
                                                    <option> Audi 4</option>
                                                    <option> Audi 5</option>

                                                </select>
                                                
                                            </div>
                                            <div class="volkswagon">
                                                <select class="form-control">
                                                   <option> volkswagon 1</option>
                                                    <option> volkswagon 2</option>
                                                    <option> volkswagon 3</option>
                                                    <option> volkswagon 4</option>
                                                    <option>volkswagon 5</option>
                                                    <option>Other</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                         <label class="fieldlabels">Vehicle year: *</label> 
                                          
                                           <select  class="form-control" name="vehicleyear" placeholder="Enter Year">
                                              <option selected> Choose </option>
                                                <?php 
                                                   // for($i = 1950 ; $i < date('Y'); $i++){
                                                   //    echo "<option>$i</option>";
                                                   }
                                                ?>
                                           </select>
                                         <label class="fieldlabels">License plate: *</label> 
                                            <input type="text" name="licenseplate" placeholder="License plate">
                                         <label class="fieldlabels">Vehicle color: *</label> 
                                            <input type="text" name="vehiclecolor" placeholder="Vehicle color">

                                
                                     </div>
                                </div>
                        <input type="button" name="next" class="next action-button" value="Next"> <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset> -->
                   <!--  <fieldset id="document_fees">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Documents & fees:</h2>
                                </div>
                                
                            </div> <label class="fieldlabels">National ID: *</label> <input type="text" name="NationalID" placeholder="National ID" required/>
                             <label class="fieldlabels">Driver license: *</label> <input type="text" name="Driverlicense" placeholder="Driver license" required/>
                             

                        </div> <input type="button" name="next" class="next action-button" value="Submit"> <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset> -->
                      <!-- <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Documents</h2>
                                    </div>
                                    
                                </div>
                            <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Driver ID document/Passport</h3>
      
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>Upload your South African ID card or book. If you don't have a South African ID, upload your Passport.</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>

                             <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Driver's License with PrDP</h3>
      
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>A valid South African driving license with PrDP is required to register as a Bolt Driver..</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>

                             <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Driver Photo</h3>
     
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>Must be on a clear white background. If you don't provide, we can take it during training session..</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>

                             <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Motor Vehicle License Disc with Operator Card</h3>
      
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>A Motor Vehicle License Disc with Operator Card (Double disc) is required when registering a new car with Bolt..</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>

                             <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Certificate of Registration for your car</h3>
     
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>Vehicle certificate of registration indicating car model and year of first registration..</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>

                             <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Vehicle Inspection Report</h3>
      
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>The inspection report has to be performed for all vehicle applications and must not be older than 3 months. Visit an approved partner near you:.</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>

                              <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Operating License</h3>
     
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-md-12 ml-0">
      <p>Obtained from the Department of Transport in JHB or Pretoria..</p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>
                            


                             <div class="document-container m-t">
                                       <div class="row">
                                    <div class="col-xs-12">
      <h3 class="pull-left">Signed EME Affidavit</h3>
      
    </div>
    <span class="text-danger float-right ml-3">Required *</span>
    <div class="col-xs-12">
      <p>By submitting an Exempt Micro Entity (EME) affidavit form, you automatically qualify for a Level-1 BEE rating.

Click here to obtain the form

For instructions and how to complete the form and for more information regarding EME registration <a href="">click here.</a></p>
    </div>
     <label class="fieldlabels">Upload:</label> 
                                <input type="file" name="pic" accept="image/*"> 
                                </div>
                            </div>

                             <br>


                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset> -->
                         <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Payment details</h2>
                                    </div>
                                    
                                </div> 
                                <label class="fieldlabels">Billing type *</label> 
                                  <select size="1" id="" title="" name="" class="form-control">
    <option value="" selected="">-Choose</option>
    <option value="">Company</option>
    <option value="">Person</option>
    <option value="">Other</option>
</select>

                                <label class="fieldlabels">Company name *</label> 
                                <input type="text" name="phno" placeholder="ABC Taxis Ltd" />
                                
                                <label class="fieldlabels">Address *</label> 
                                <input type="text" name="phno" placeholder="Vana-Louna tn 39/1, Tallin, 10134" />

                                <label class="fieldlabels">Registration code *</label> 
                                <input type="text" name="phno" placeholder="12345437" />

                                <label class="fieldlabels">VAT number *</label> 
                                <input type="text" name="phno" placeholder="67879" />

                                <label class="fieldlabels">Bank account holder name *</label> 
                                <input type="text" name="phno" placeholder="ABC Taxis Ltd / John Doe" />

                                <label class="fieldlabels">Bank account number *</label> 
                                <input type="text" name="phno" placeholder="3345667879" />

                                <label class="fieldlabels">Bank Name or BIC/SWIFT *</label> 
                                <input type="text" name="phno" placeholder="HABALT44" />
                            </div>
                            <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>	
<script src="js/driverscript.js"> </script>
</body>
</html>