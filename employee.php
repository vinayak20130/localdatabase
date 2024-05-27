<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="dev_raj" />
    <!-- ======== Page title ============ -->
    <title>ghfh</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="description" content="Call Analog" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/solar/favicon.png" />
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- template main style css file -->
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="assets/css/dashboard.css" />
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="responsive.css" />
</head>

<body class="body-wrapper bg4">
    <?php
    include "header.php";
    ?>

    <section class="main-dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-2">
                    <div class="main-icons-box">
                        <a href="dashboard.php"><img src="assets/img/image/data.png" class="icon icon1" /></a>
                        <a href="employee.php"><img src="assets/img/image/wpe.png" class="icon icon2" style="background-color: #105A71;" /></a>
                        <a href="add-employee.php"><img src="assets/img/image/blad.png" class="icon icon3" /></a>
                        <a href="javascript:void(0);"><img src="assets/img/image/Logout.png" class="icon icon3" /></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="main-employee-page-box">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-lg-4 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Total time spent (mins.)</p>
                                            <h3 class="color20">234500</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Avg. time spent (mins.)</p>
                                            <h3 class="color20">25000</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Total no. of session taken</p>
                                            <h3 class="color20">3</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-6 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Full name</p>
                                            <h3 class="color20">340</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-1">
                                        <div class="box-rates">
                                            <p class="color19 fs14 fpw6">Employee Id</p>
                                            <h3 class="color20">182*343*342*33</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-7 mgt">
                                <div class="row">
                                    <div class="col-lg-4 p-1">
                                        <div class="box-rates-graphs">
                                            <div class="graph-box">
                                                <div class="content active" id="tabContent1">
                                                    <canvas id="myChart"></canvas>
                                                </div>
                                                <div class="content" id="tabContent2">
                                                    <canvas id="myChartMonth"></canvas>
                                                </div>

                                                <div class="content" id="tabContent3">
                                                    <canvas id="myChartYear"></canvas>
                                                </div>

                                                <div class="tabs">
                                                    <div class="tab" onclick="changeTabEmpGraph1(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                    <div class="tab" onclick="changeTabEmpGraph1(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                    <div class="tab" onclick="changeTabEmpGraph1(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 p-1">
                                        <div class="box-rates-graphs2">
                                            <div class="graph-box">
                                                <div class="content active" id="tabContent1">
                                                    <canvas id="myChartNew"></canvas>
                                                </div>
                                                <div class="content" id="tabContent2">
                                                    <canvas id="myChartNewMonth"></canvas>
                                                </div>

                                                <div class="content" id="tabContent3">
                                                    <canvas id="myChartNewYear"></canvas>
                                                </div>

                                                <div class="tabs">
                                                    <div class="tab" onclick="changeTabEmpGraph2(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                    <div class="tab" onclick="changeTabEmpGraph2(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                    <div class="tab" onclick="changeTabEmpGraph2(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 p-1">
                                        <div class="box-rates-graphs3">
                                            <div class="graph-box">
                                                <div class="content active" id="tabContent1">
                                                    <canvas id="myChartNewAvts"></canvas>
                                                </div>
                                                <div class="content" id="tabContent2">
                                                    <canvas id="myChartNewMonthAvts"></canvas>
                                                </div>

                                                <div class="content" id="tabContent3">
                                                    <canvas id="myChartNewYearAvts"></canvas>
                                                </div>

                                                <div class="tabs">
                                                    <div class="tab" onclick="changeTabEmpGraph3(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                    <div class="tab" onclick="changeTabEmpGraph3(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                    <div class="tab" onclick="changeTabEmpGraph3(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-12 p-2">
                                        <div class="box-rates-employee-search">
                                            <p class="fpw6">Search by</p>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="fs14 color21 fpw6">Name</label>
                                                            <input type="text" placeholder="Search for a name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="fs14 color21 fpw6">Employee Id</label>
                                                            <input type="text" placeholder="12233435">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="data-show-suggesstion">
                                                <p class="fpw6 color21">Search Results:</p>

                                                <div class="flex-item">
                                                    <p class="fs14 fpw6 color21">Employee Name</p>
                                                    <p class="fs14 fpw6 color21">12323477293</p>
                                                </div>
                                                <div class="flex-item">
                                                    <p class="fs14 fpw6 color21">Employee Name</p>
                                                    <p class="fs14 fpw6 color21">12323477293</p>
                                                </div>
                                                <div class="flex-item">
                                                    <p class="fs14 fpw6 color21">Employee Name</p>
                                                    <p class="fs14 fpw6 color21">12323477293</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="employee-training-assessment-box">
                        <div class="row">
                            <div class="col-lg-6 p-1">
                                <div class="training-box">
                                    <h4 class="heading">Training Section</h4>
                                    <div class="white-box">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-7">
                                                <div class="box-rates-wt">
                                                    <p class="color19 fs14 fpw6">Total time spent (mins.) in training</p>
                                                    <h3 class="color20">835240</h3>
                                                </div>
                                                <div class="box-rates-training">
                                                    <div class="graph-box">
                                                        <div class="content active" id="tabContent1">
                                                            <canvas id="myChartNeUild"></canvas>
                                                        </div>
                                                        <div class="content" id="tabContent2">
                                                            <canvas id="myChartNewMonthUild"></canvas>
                                                        </div>

                                                        <div class="content" id="tabContent3">
                                                            <canvas id="myChartNewYearUild"></canvas>
                                                        </div>

                                                        <div class="tabs">
                                                            <div class="tab" onclick="changeTabEmpTrainGraph1(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                            <div class="tab" onclick="changeTabEmpTrainGraph1(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                            <div class="tab" onclick="changeTabEmpTrainGraph1(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-1"></div>
                                            <div class="col-lg-2">
                                                <div class="slection-option">
                                                    <select>
                                                        <option>Session 1</option>
                                                        <option>Session 2</option>
                                                        <option>Session 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 1 -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 2  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 3  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 4   -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 5  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Avg. time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid3" data-label="Amount">4m 23s</td>
                                                        <td class="wid4" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid2" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid3" data-label="Amount">6m 34s</td>
                                                        <td class="wid4" data-label="Period">150hr 34m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid3" data-label="Amount">1m 23s</td>
                                                        <td class="wid4" data-label="Period">138hr 11m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid3" data-label="Amount">5m 59s</td>
                                                        <td class="wid4" data-label="Period">136hr 27m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the samer</td>
                                                        <td class="wid3" data-label="Amount">10m 11s</td>
                                                        <td class="wid4" data-label="Period">130hr 26m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-1">
                                <div class="training-box">
                                    <h4 class="heading">Assessment Section</h4>
                                    <div class="white-box">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-7">
                                                <div class="box-rates-wt">
                                                    <p class="color19 fs14 fpw6">Total time spent (mins.) in Assessment</p>
                                                    <h3 class="color20">569600</h3>
                                                </div>
                                                <div class="box-rates-assessment">
                                                    <div class="graph-box">
                                                        <div class="content active" id="tabContent1">
                                                            <canvas id="myChartNeSml"></canvas>
                                                        </div>
                                                        <div class="content" id="tabContent2">
                                                            <canvas id="myChartNewMonthSml"></canvas>
                                                        </div>

                                                        <div class="content" id="tabContent3">
                                                            <canvas id="myChartNewYearSml"></canvas>
                                                        </div>

                                                        <div class="tabs">
                                                            <div class="tab" onclick="changeTabEmpTrainGraph2(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                            <div class="tab" onclick="changeTabEmpTrainGraph2(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                            <div class="tab" onclick="changeTabEmpTrainGraph2(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-2"></div>
                                            <div class="col-lg-2">
                                                <div class="slection-option">
                                                    <select>
                                                        <option>Session 1</option>
                                                        <option>Session 2</option>
                                                        <option>Session 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 1 -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                        <th class="fpw6">Target time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid7" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid7" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid7" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the same</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 2  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                        <th class="fpw6">Target time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid7" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid7" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid7" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the same</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 3  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                        <th class="fpw6">Target time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid7" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid7" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid7" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the same</td>
                                                        <td class="wid6 text-center" data-label="Due Date">-</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 4  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                        <th class="fpw6">Target time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid7" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid7" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid6" data-label="Due Date"><span>-</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid7" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid6" data-label="Due Date">-</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid6" data-label="Due Date">-</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the same</td>
                                                        <td class="wid6" data-label="Due Date">-</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- 5  -->
                                        <div class="flex-table-heading-box mt-2">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Attempt 1</option>
                                                        <option>Attempt 2</option>
                                                        <option>Attempt 3</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total time spent on this module:<span class="fpw6"> 200</span></p>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of the task</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                        <th class="fpw6">Target time</th>
                                                        <th class="fpw6">Time spent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid7" data-label="Due Date">Pick up the spanner</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">2. </td>
                                                        <td class="wid7" data-label="Due Date">Unscrew 5mm Bolts</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid7" data-label="Due Date">Grab the new part</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid7" data-label="Due Date">Place it correctly, and if the step exceeds the limit of 2 lines the words should wrap with the column remaining the same</td>
                                                        <td class="wid6" data-label="Due Date"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                        <td class="wid6" data-label="Amount">4m 23s</td>
                                                        <td class="wid6" data-label="Period">350hr 45m</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    var flexItems = document.querySelectorAll(".flex-item");

    flexItems.forEach(function (item) {
        item.addEventListener("click", function () {
            // Remove active class from all items
            flexItems.forEach(function (item) {
                item.classList.remove("bg14");
                item.classList.remove("br4");
                item.classList.remove("bdbl");
            });
            
            // Add active class to the clicked item
            this.classList.add("bg14");
            this.classList.add("br4");
            this.classList.add("bdbl");
        });
    });
});

</script>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>







</body>

</html>