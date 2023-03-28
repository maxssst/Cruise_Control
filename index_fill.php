<?php
//Подключение шапки
require_once("header.php");
require_once("login_checkout.php");
?>








<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
    <a href="https://mobirise.site/l" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/i" style="color:#aaa;">Created with Mobirise</a> site maker</p>
</section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>


</body>





<section class="content13 cid-sx2w8CocJj mbr-fullscreen" name="content13-i">


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                    <strong>Please fill all nececary forms</strong>
                </h3>




            </div>
        </div>
        <article class="" name="validation">

            <div class="bd-example">


                <form class="row g-3" action="page4.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-4">
                        Выбирите фото:
                        <input type="file" name="pictures[]" />
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">NAME</label>
                        <input type="text" class="form-control is-valid" name="form_1" value="Name" required>
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">SURNAME</label>
                        <input type="text" class="form-control is-valid" name="form_2" value="Surname" required>
                        <div class="valid-feedback"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">TODAY DATE</label>
                        <input type="text" class="form-control is-valid" name="form_3" value="TO" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">RANK</label>
                        <!-- <input type="text" class="form-control is-valid" name="form_4" value="TO" required> -->
                        <select type="text" class="form-control is-valid" name="form_4" id="form_4" required>
                            <option value="">Select Rank</option>
                            <option value="Captain">Captain</option>
                            <option value="Chef Off">Chief Officer</option>
                            <option value="2nd Off">2nd OFF</option>
                            <option value="3d Off">3d OFF</option>
                            <option value="Deck Junior">Deck Junior</option>
                            <option value="Deck Cadet">Deck Cadet</option>
                            <option value="Pump Man">Pump Man</option>
                            <option value="Bosun">Bosun</option>
                            <option value="AB">AB</option>
                            <option value="OS">OS</option>

                            <option value="Chief Eng">Chief Eng</option>
                            <option value="2nd Eng">2nd Eng</option>
                            <option value="3d Eng">3d Eng</option>
                            <option value="4th Eng">4th ENG</option>
                            <option value="El Eng">El Eng</option>
                            <option value="Eng Junior">Eng Junior</option>
                            <option value="Eng Cadet">Eng Cadet</option>
                            <option value="Motorman">Motorman</option>
                            <option value="Oiler">Oiler</option>
                            <option value="Wiper">Wiper</option>
                        </select>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">SECOND RANK</label>
                        <!-- <input type="text" class="form-control is-valid" name="form_5" value="TO"> -->
                        <select type="text" class="form-control is-valid" name="form_5" id="form_5">
                            <option value="">No</option>
                            <option value="Captain">Captain</option>
                            <option value="Chef Off">Chief Officer</option>
                            <option value="2nd Off">2nd OFF</option>
                            <option value="3nd Off">3nd OFF</option>
                            <option value="Deck Junior">Deck Junior</option>
                            <option value="Deck Cadet">Deck Cadet</option>
                            <option value="Pump Man">Pump Man</option>
                            <option value="Bosun">Bosun</option>
                            <option value="AB">AB</option>
                            <option value="OS">OS</option>

                            <option value="chief Eng">Chief Eng</option>
                            <option value="2nd Eng">2nd Eng</option>
                            <option value="3nd Eng">3nd Eng</option>
                            <option value="4th Eng">4th ENG</option>
                            <option value="El Eng">El Eng</option>
                            <option value="Eng Junior">Eng Junior</option>
                            <option value="Eng Cadet">Eng Cadet</option>
                            <option value="Motorman">Motorman</option>
                            <option value="Oiler">Oiler</option>
                            <option value="Wiper">Wiper</option>
                        </select>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">NATIONALITY</label>
                        <input type="text" class="form-control is-valid" name="form_6" value="TO" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">PLACE OF BIRTH</label>
                        <input type="text" class="form-control is-valid" name="form_7" value="TO" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">DATE OF BIRTH</label>
                        <input type="text" class="form-control is-valid" name="form_8" value="TO" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">MARRIED</label>
                        <!-- <input type="text" class="form-control is-valid" name="form_9" value="TO"> -->
                        <select type="text" class="form-control is-valid" name="form_9" id="form_9" required>
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">NAME OF WIFE</label>
                        <input type="text" class="form-control is-valid" name="form_10">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">CHILDREN</label>
                        <!-- <input type="text" class="form-control is-valid" name="form_11" value="TO"> -->
                        <select type="text" class="form-control is-valid" name="form_11" id="form_11" required>
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">NEXT OF KIN NAME</label>
                        <input type="text" class="form-control is-valid" name="form_12">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">NEXT OF KIN ADRESS</label>
                        <input type="text" class="form-control is-valid" name="form_13" value="TO">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">NEXT OF KIN PHONE</label>
                        <input type="text" class="form-control is-valid" name="form_14" value="TO">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">HOME ADRESS</label>
                        <input type="text" class="form-control is-valid" name="form_15" value="TO" required>
                        <div class="valid-feedback">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control is-valid" name="form_16" value="TO" required>
                        <div class="valid-feedback">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">PHONE 1</label>
                        <input type="text" class="form-control is-valid" name="form_17" value="TO" required>
                        <div class="valid-feedback">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">PHONE 2</label>
                        <input type="text" class="form-control is-valid" name="form_18" value="TO">
                        <div class="valid-feedback">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                <label for="validationServer02" class="form-label">SEAMAN’S PASSPORT №</label>
                                <input type="text" class="form-control is-valid" name="form_25" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="From / To">VALID DATE</label>
                                <input type="text" class="form-control is-valid" name="form_26" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                <label for="validationServer02" class="form-label">TRAVEL PASSPORT №</label>
                                <input type="text" class="form-control is-valid" name="form_27" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">VALID DATE</label>
                                <input type="text" class="form-control is-valid" name="form_28" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">


                    </div>

                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>CERTIFICATE OF COMPETENCY</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_29" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_30" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_31" value="FROM / TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Endorsement of Competency</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_32" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_33" value="TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_34" value="FROM / TO" required>
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>GMDSS Operator</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_35">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_36">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_37" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Endorsement of GMDSS operator</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_38">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_39">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_40" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Oil tanker Certificate of Proficiency</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_41">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_42">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_43" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Chemical tanker Certificate of Proficiency</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_44">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_45">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_46" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Gas tanker Certificate of Proficiency</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_47">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_48">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_49" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Certificate of Proficiency Aditional</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_50">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_51">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_52" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <p>Endorsement of Proficiency Aditional</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_53">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_54">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_55" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Basic Safety Training and Instruction (A-VI/1-1-2-3-4)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_56">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_57">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_58" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Proficiency in survival craft and rescue boats (A-VI/2)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_59">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Advanced fire fighting (A-VI/3)</label>
                                <input type="text" class="form-control is-valid" name="form_60">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_61" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Advanced fire fighting (A-VI/3)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_62">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_63">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_64" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Medical Emergency-First Aid (A-VI/4-1-2-3)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_65">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_66">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_67" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Medical Care on board ship (A-VI/4-4-5-6)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_68">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_69">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_70" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Carriage of Dangerous and Hazardous Substances(B-V/b, B-V/c)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_71">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_72">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_73" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Security training for seafarers with designated security duties (A-VI/6-2)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_74">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_75">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_76" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Security Awareness Training for all seafarers(A-VI/6-1)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_77">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_78">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_79" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Ship Security Officer (SSO) (ISPS code)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_80">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_81">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_82" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Ship Safety Officer (ISM code)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_83">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_84">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_85" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training for personnel serving on passenger ships</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_86">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_87">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_88" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training in the use of radar plotting and ARPA (operational level)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_89">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_90">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_91" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training in radar displays, watch keeping, organization, search and rescue (management level)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_92">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_93">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_94" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training in operations of electronic charts</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_95">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_96">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_97" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Bridge team and resource management</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_98">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_99">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_100" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Ships handling arrangements</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_101">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_102">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_103" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Engine room resource management</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_104">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_105">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_106" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Basic training for liquefied gas tanker cargo operation</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_107">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_108">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_109" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Basic training for oil and chemical tanker cargo operation</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_110">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_111">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_112" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Oil tanker specialized training (V/1, A-V/1 p.9-14)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_113">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_114">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_115" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Chemical tanker specialized training(V/1, A-V/1 p.16-21)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_116">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_117">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_118" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Liquefied gas specialized training(V/1, A-V/1 p.23-34)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_119">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_120">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_121" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training in crude oil washing</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_122">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_123">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_124" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training in operation of inert gas system</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_125">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_126">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_127" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Proficiency in fast rescue boats (VI/2, А-VI/2-2)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_128">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_129">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_130" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Training in operation of compressed air breathing apparatus (V/I, VI/1, B-V/b, B-V/c)</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_140">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_141">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_142" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Certificate of Ship Crane Operator</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_143">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_144">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_145" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Certificate of Ship Painter</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_146">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_147">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_148" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Certificate of Ship Turner</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_149">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_150">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_151" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Certificate of Ship Welder</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_152">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_153">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_154" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div>
                                <p>Yellow Fever vaccination</p>
                                <label for="validationServer02" class="form-label">Number</label>
                                <input type="text" class="form-control is-valid" name="form_155">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Place of issue</label>
                                <input type="text" class="form-control is-valid" name="form_156">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Valid date To</label>
                                <input type="text" class="form-control is-valid" name="form_157" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Height (cm):</label>
                                <input type="text" class="form-control is-valid" name="form_158">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Weight (kgs):</label>
                                <input type="text" class="form-control is-valid" name="form_159">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Overall size:</label>
                                <input type="text" class="form-control is-valid" name="form_160">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label" value="FROM / TO">Safety Shoes size:</label>
                                <input type="text" class="form-control is-valid" name="form_161">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-4"> </div>


                    <div class="col-md-4">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Vessel’s name</label>
                                <input type="text" class="form-control is-valid" name="form_162">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label">Flag</label>
                                <input type="text" class="form-control is-valid" name="form_163">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Type</label>
                                <input type="text" class="form-control is-valid" name="form_164">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">DWT</label>
                                <input type="text" class="form-control is-valid" name="form_165">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Main engineType</label>
                                <input type="text" class="form-control is-valid" name="form_166">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Managing Company</label>
                                <input type="text" class="form-control is-valid" name="form_167">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Rank</label>
                                <input type="text" class="form-control is-valid" name="form_168">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Duration From / To</label>
                                <input type="text" class="form-control is-valid" name="form_169" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Vessel’s name</label>
                                <input type="text" class="form-control is-valid" name="form_170">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label">Flag</label>
                                <input type="text" class="form-control is-valid" name="form_171">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Type</label>
                                <input type="text" class="form-control is-valid" name="form_172">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">DWT</label>
                                <input type="text" class="form-control is-valid" name="form_173">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Main engineType</label>
                                <input type="text" class="form-control is-valid" name="form_174">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Managing Company</label>
                                <input type="text" class="form-control is-valid" name="form_175">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Rank</label>
                                <input type="text" class="form-control is-valid" name="form_176">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Duration From / To</label>
                                <input type="text" class="form-control is-valid" name="form_177" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Vessel’s name</label>
                                <input type="text" class="form-control is-valid" name="form_178">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label">Flag</label>
                                <input type="text" class="form-control is-valid" name="form_179">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Type</label>
                                <input type="text" class="form-control is-valid" name="form_180">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">DWT</label>
                                <input type="text" class="form-control is-valid" name="form_181">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Main engineType</label>
                                <input type="text" class="form-control is-valid" name="form_182">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Managing Company</label>
                                <input type="text" class="form-control is-valid" name="form_183">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Rank</label>
                                <input type="text" class="form-control is-valid" name="form_184">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Duration From / To</label>
                                <input type="text" class="form-control is-valid" name="form_185" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Vessel’s name</label>
                                <input type="text" class="form-control is-valid" name="form_186">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label">Flag</label>
                                <input type="text" class="form-control is-valid" name="form_187">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Type</label>
                                <input type="text" class="form-control is-valid" name="form_188">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">DWT</label>
                                <input type="text" class="form-control is-valid" name="form_189">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Main engineType</label>
                                <input type="text" class="form-control is-valid" name="form_190">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Managing Company</label>
                                <input type="text" class="form-control is-valid" name="form_191">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Rank</label>
                                <input type="text" class="form-control is-valid" name="form_192">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Duration From / To</label>
                                <input type="text" class="form-control is-valid" name="form_193" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Vessel’s name</label>
                                <input type="text" class="form-control is-valid" name="form_194">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label">Flag</label>
                                <input type="text" class="form-control is-valid" name="form_195">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Type</label>
                                <input type="text" class="form-control is-valid" name="form_196">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">DWT</label>
                                <input type="text" class="form-control is-valid" name="form_197">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Main engineType</label>
                                <input type="text" class="form-control is-valid" name="form_198">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Managing Company</label>
                                <input type="text" class="form-control is-valid" name="form_199">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Rank</label>
                                <input type="text" class="form-control is-valid" name="form_200">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Duration From / To</label>
                                <input type="text" class="form-control is-valid" name="form_201" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <div>

                                <label for="validationServer02" class="form-label">Vessel’s name</label>
                                <input type="text" class="form-control is-valid" name="form_202">
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div>
                                <label for="validationServer02" class="form-label">Flag</label>
                                <input type="text" class="form-control is-valid" name="form_203">
                                <div class="valid-feedback">
                                </div>
                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Type</label>
                                <input type="text" class="form-control is-valid" name="form_204">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">DWT</label>
                                <input type="text" class="form-control is-valid" name="form_205">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Main engineType</label>
                                <input type="text" class="form-control is-valid" name="form_206">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Managing Company</label>
                                <input type="text" class="form-control is-valid" name="form_207">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Rank</label>
                                <input type="text" class="form-control is-valid" name="form_208">
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div>
                                <label for="validationServer02" class="form-label">Duration From / To</label>
                                <input type="text" class="form-control is-valid" name="form_209" value="FROM / TO">
                                <div class="valid-feedback">
                                </div>

                            </div>
                        </div>
                    </div>





            </div>

            <div class="col-md-4"> </div>
            <div class="col-22 align-center">
                <h2> Please check Your Information before Download </h2>

                <button class="btn btn-info" type="submit" name="download_pdf">Download PDF CV</button>
            </div>
            </form>
            <div class="container py-4">
                <a class="btn btn-primary display-7" href="index_cabinet.php">
                    Вернуться </a>
            </div>
    </div>
    </article>

    </div>
</section>



<section class="footer7 cid-sx2khhYvkW" once="footers" name="footer7-h">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2025 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/q" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Site <a href="https://mobirise.site/f" style="color:#aaa;">was designed</a> with Mobirise</p>
</section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>


</body>

</html>