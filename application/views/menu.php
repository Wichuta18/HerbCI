<body>
    <div class="container">
        <header id="main-header">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-5">
                    <img src="<?php echo base_url() ?>assets/img/img1.jpg" alt="">
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="d-flex flex-column">
                        <div class="p-5 bg-green text-white">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h1 class="display-4">Mhunprai</h1>
                            </div>
                        </div>

                        <div class="p-4 bg-greentwo">
                            Exprienced Mhumprai
                        </div>
                        <div>
                            <div class="d-flex flex-row text-white align-item-stretch text-center">
                                <div class="port-item p-4 bg-greenmenu1" data-toggle="collapse" data-target="#home">
                                    <i class="fas fa-home fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Home</span>
                                </div>
                                <div class="port-item p-4 bg-greenmenu2" data-toggle="collapse" data-target="#herbsearch">
                                    <i class="fas fa-feather-alt fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Herb Search</span>
                                </div>
                                <div class="port-item p-4 bg-greenmenu3" data-toggle="collapse" data-target="#symptomsearch">
                                    <i class="fas fa-feather-alt fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Symptom Search</span>
                                </div>
                                <div class="port-item p-4 bg-greenmenu4" data-toggle="collapse" data-target="#group">
                                    <i class="fas fa-feather-alt fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Group</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!--home-->
        <div id="home" class="collapse show">
            <div class="card card-body bg-greenmenu1 text-white py-5">
                <h2>Welcome To Mhunprai</h2>
                <p class="lead">test</p>
            </div>

            <div class="card card-body py5">
                <h3>Test</h3>
                <p>Hello</p>
                <hr>

                <h4>ยาหอมทิพโอสถ</h4>
                <p>คะแนนความพึงพอใจ</p>
                <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <h4>ยาหอมเทพจิตร</h4>
                <p>คะแนนความพึงพอใจ</p>
                <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
            </div>


        </div>
        <!--home-->

        <!--herb-->
        <div id="herbsearch" class="collapse">
            <div class="card card-body bg-greenmenu2 text-white py-5">
                <h2>Herb Search</h2>
                <p class="lead">test</p>
            </div>
            <div class="card card-body py-5">
                <form action="">
                    <div class="form-row">
                        <div class="from-group col-md-6">
                        <label for="inputEmail4">Input Herb</label>
                        <input type="text" class="form-control" id="herb" placeholder="herb">
                        </div><br>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Search</button>   
                </form><br>

                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">แก่นสนเทศ</h5>
                            <p class="card-text">-แก้ลมวิงเวียน</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--herb-->

        <!--Symptom-->
        <div id="symptomsearch" class="collapse">
            <div class="card card-body bg-greenmenu2 text-white py-5">
                <h2>symptom Search</h2>
                <p class="lead">test</p>
            </div>
            <div class="card card-body py-5">
                <form action="">
                    <div class="form-row">
                        <div class="from-group col-md-6">
                        <label for="inputEmail4">Input symptom</label>
                        <input type="text" class="form-control" id="herb" placeholder="symptom">
                        </div><br>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Search</button>   
                </form><br>

                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ยาหอมทิพโอสถ </h5>
                            <p class="card-text">
                            <dl>
                                <dt>สูตรตำรับ</dt>
                                <dd>ในผงยา 142 กรัม ประกอบด้วย</dd>
                                <dd>1. ดอกพิกุล ดอกบุนนาค ดอกสารภี ดอกมะลิ เกสรบัวหลวง ดอกกระดังงา ดอกจำปา ดอกบัวจงกลนี หัวแห้วไทย กระจับ แก่นฝาง แก่นจันทน์แดง แก่นจันทน์ขาว แก่นจันทน์เทศ กฤษณา เปลือกชะลูด เปลือกอบเชย เปลือกสมุลแว้ง แก่นสนเทศ เหง้าว่านนํ้า เหง้ากระชาย หัวเปราะหอม ดอกคำไทย รากชะเอมเทศ แก่นสุรามฤต ลำต้นข่าต้น ลูกจันทน์ ดอกจันทน์ หนักสิ่งละ 4 กรัม </dd>
                                <dd>2. โกฐสอ โกฐเขมา โกฐหัวบัว โกฐเชียง โกฐจุฬาลัมพา โกฐกระดูก โกฐก้านพร้าว โกฐพุงปลา โกฐชฎามังสี หนักสิ่งละ 2 กรัม </dd>
                                <dd>3. เทียนดำ เทียนแดง เทียนขาว เทียนข้าวเปลือก เทียนตาตั๊กแตน เทียนเยาวพาณี เทียนสัตตบุษย์ เทียนเกล็ดหอย เทียนตากบ หนักสิ่งละ 1 กรัม </dd>
                                <dd>4. พิมเสน หนัก 2 กรัม การบูร หนัก 1 กรัม</dd>
                                <dt>คำแนะนำ</dt>
                                <dd>แก้ลมวิงเวียน</dd>
                                <dt>ขนาดและวิธีใช้</dt>
                                <dd>ชนิดผง</dd>
                                <dd>รับประทานครั้งละ 1 – 1.4 กรัม ละลายน้ำกระสายยา เมื่อมีอาการ ทุก 3 - 4 ชั่วโมง ไม่ควรเกินวันละ 3 ครั้ง </dd>
                                <dd>ชนิดเม็ด</dd>
                                <dd>รับประทานครั้งละ 1 – 1.4 กรัม เมื่อมีอาการ ทุก 3 - 4 ชั่วโมง ไม่ควรเกินวันละ 3 ครั้ง</dd>
                                <dt>คำเตือน</dt>
                                <dd>- ควรระวังการรับประทานร่วมกับยาในกลุ่มสารกันเลือดเป็นลิ่ม (anticoagulant) และยาต้านการจับตัวของเกล็ดเลือด (antiplatelets) </dd>
                            </dl> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <!--Symptom-->

        <!--Symptom group-->
        <div id="group" class="collapse">
            <div class="card card-body bg-greenmenu2 text-white py-5">
                <h2>Symptom group Search</h2>
                <p class="lead">test</p>
            </div>
            <div class="card card-body py-5">
                <form action="">
                    <div class="form-row">
                        <div class="from-group col-md-6">
                        <label for="inputEmail4">Input symptom group</label>
                        <input type="text" class="form-control" id="herb" placeholder="symptom group">
                        </div><br>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Search</button>   
                </form><br>

                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ยาหอมทิพโอสถ </h5>
                            <p class="card-text">
                            <dl>
                                <dt>สูตรตำรับ</dt>
                                <dd>ในผงยา 142 กรัม ประกอบด้วย</dd>
                                <dd>1. ดอกพิกุล ดอกบุนนาค ดอกสารภี ดอกมะลิ เกสรบัวหลวง ดอกกระดังงา ดอกจำปา ดอกบัวจงกลนี หัวแห้วไทย กระจับ แก่นฝาง แก่นจันทน์แดง แก่นจันทน์ขาว แก่นจันทน์เทศ กฤษณา เปลือกชะลูด เปลือกอบเชย เปลือกสมุลแว้ง แก่นสนเทศ เหง้าว่านนํ้า เหง้ากระชาย หัวเปราะหอม ดอกคำไทย รากชะเอมเทศ แก่นสุรามฤต ลำต้นข่าต้น ลูกจันทน์ ดอกจันทน์ หนักสิ่งละ 4 กรัม </dd>
                                <dd>2. โกฐสอ โกฐเขมา โกฐหัวบัว โกฐเชียง โกฐจุฬาลัมพา โกฐกระดูก โกฐก้านพร้าว โกฐพุงปลา โกฐชฎามังสี หนักสิ่งละ 2 กรัม </dd>
                                <dd>3. เทียนดำ เทียนแดง เทียนขาว เทียนข้าวเปลือก เทียนตาตั๊กแตน เทียนเยาวพาณี เทียนสัตตบุษย์ เทียนเกล็ดหอย เทียนตากบ หนักสิ่งละ 1 กรัม </dd>
                                <dd>4. พิมเสน หนัก 2 กรัม การบูร หนัก 1 กรัม</dd>
                                <dt>คำแนะนำ</dt>
                                <dd>แก้ลมวิงเวียน</dd>
                                <dt>ขนาดและวิธีใช้</dt>
                                <dd>ชนิดผง</dd>
                                <dd>รับประทานครั้งละ 1 – 1.4 กรัม ละลายน้ำกระสายยา เมื่อมีอาการ ทุก 3 - 4 ชั่วโมง ไม่ควรเกินวันละ 3 ครั้ง </dd>
                                <dd>ชนิดเม็ด</dd>
                                <dd>รับประทานครั้งละ 1 – 1.4 กรัม เมื่อมีอาการ ทุก 3 - 4 ชั่วโมง ไม่ควรเกินวันละ 3 ครั้ง</dd>
                                <dt>คำเตือน</dt>
                                <dd>- ควรระวังการรับประทานร่วมกับยาในกลุ่มสารกันเลือดเป็นลิ่ม (anticoagulant) และยาต้านการจับตัวของเกล็ดเลือด (antiplatelets) </dd>
                            </dl> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Symptom group-->
