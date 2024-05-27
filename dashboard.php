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
                <div class="col-lg-1 col-md-1 col-sm-1 col-2">
               <div class="main-icons-box">
                        <a href="dashboard.php"><img src="assets/img/image/was.png" class="icon icon1" style="background-color: #105A71;" /></a>
                        <a href="employee.php"><img src="assets/img/image/embl.png" class="icon icon2" /></a>
                        <a href="add-employee.php"><img src="assets/img/image/blad.png" class="icon icon3" /></a>
                        <a href="javascript:void(0);" id="popupButton"><img src="assets/img/image/Logout.png" class="icon icon3" /></a>
 
                        <div id="popup" class="popup">
                            <div class="popup-content">
                                <span class="close" id="closeButton">&times;</span>
                                <h4 class="color21 fpw6 pb-2">Log out</h4>
                                <p class="color21 fpw4 pb-3">Are you sure you want to log out ?</p>
                               <div class="rightbtns">
                               <div class="nostay-btn">
                                    <a href="">No, Stay</a>
                                </div>
                                <div class="logout-btn">
                                    <a href="">No, Stay</a>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
 
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="main-dashboard-content-box">
                        <div class="flex-main-data">
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Total no. of users</p>
                                    <h3 class="color20 fpw4">234500</h3>
                                </div>
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
                                        <div class="tab" onclick="changeTab(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                        <div class="tab" onclick="changeTab(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                        <div class="tab" onclick="changeTab(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Total time spent (mins.) </p>
                                    <h3 class="color20 fpw4">25000</h3>
                                </div>
                                <div class="graph-box-new"> <!-- Changed class name here -->
                                    <div class="content-new active" id="tabContentNew1"> <!-- Changed class name here -->
                                        <canvas id="myChartNew"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNew2"> <!-- Changed class name here -->
                                        <canvas id="myChartNewMonth"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNew3"> <!-- Changed class name here -->
                                        <canvas id="myChartNewYear"></canvas>
                                    </div>

                                    <div class="tabs-new"> <!-- Changed class name here -->
                                        <div class="tab-new" onclick="changeTabNew(1)"> <!-- Changed class name here -->
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNew(2)"> <!-- Changed class name here -->
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNew(3)"> <!-- Changed class name here -->
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Average times spent (mins.)</p>
                                    <h3 class="color20 fpw4">64</h3>
                                </div>
                                <div class="graph-box-new-avts"> <!-- Changed class name here -->
                                    <div class="content-new active" id="tabContentNewAvts1"> <!-- Changed class name here -->
                                        <canvas id="myChartNewAvts"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewAvts2"> <!-- Changed class name here -->
                                        <canvas id="myChartNewMonthAvts"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewAvts3"> <!-- Changed class name here -->
                                        <canvas id="myChartNewYearAvts"></canvas>
                                    </div>

                                    <div class="tabs-new"> <!-- Changed class name here -->
                                        <div class="tab-new" onclick="changeTabNewAvts(1)"> <!-- Changed class name here -->
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewAvts(2)"> <!-- Changed class name here -->
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewAvts(3)"> <!-- Changed class name here -->
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">No. of users in last 30 days</p>
                                    <h3 class="color20 fpw4">225</h3>
                                </div>
                                <div class="graph-box-new-uild">
                                    <div class="content-new active" id="tabContentNewUild1">
                                        <canvas id="myChartNeUild"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewUild2">
                                        <canvas id="myChartNewMonthUild"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewUild3">
                                        <canvas id="myChartNewYearUild"></canvas>
                                    </div>

                                    <div class="tabs-new">
                                        <div class="tab-new" onclick="changeTabNewUild(1)">
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewUild(2)">
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewUild(3)">
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box">
                                <div class="total-user-box">
                                    <p class="color19 fpw6 fs14 ln20">Time spent (mins.) in last 30 days</p>
                                    <h3 class="color20 fpw4">400</h3>
                                </div>
                                <div class="graph-box-new-sml">
                                    <div class="content-new active" id="tabContentNewSml1">
                                        <canvas id="myChartNeSml"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewSml2">
                                        <canvas id="myChartNewMonthSml"></canvas>
                                    </div>
                                    <div class="content-new" id="tabContentNewSml3">
                                        <canvas id="myChartNewYearSml"></canvas>
                                    </div>

                                    <div class="tabs-new">
                                        <div class="tab-new" onclick="changeTabNewSml(1)">
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewSml(2)">
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul
                                        </div>
                                        <div class="tab-new" onclick="changeTabNewSml(3)">
                                            <span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="training-employee-box">
                                <div class="tab-option">
                                    <ul class="tabs">
                                        <li class="tab-link current" data-tab="tab-1">Training Section</li>
                                        <li class="tab-link" data-tab="tab-2">Employee Report</li>
                                    </ul>
                                    <div id="tab-1" class="tab-content current">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                        <div class="graph-box-tem">
                                                            <div class="content active" id="tabContentTe1">
                                                                <canvas id="myChartDaysTrainEmp"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentTe2">
                                                                <canvas id="myChartMonthsTrainEmp"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentTe3">
                                                                <canvas id="myChartYearTrainEmp"></canvas>
                                                            </div>
                                                            <div class="tabs">
                                                                <div class="tab" onclick="changeTabTe(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                                <div class="tab" onclick="changeTabTe(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                                <div class="tab" onclick="changeTabTe(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Time spent (mins.) in training</p>
                                                            <h3 class="color20 fpw4">835240</h3>
                                                        </div>
                                                        <div class="graph-box-tem-test">
                                                            <div class="content active" id="tabContentTest1">
                                                                <canvas id="myChartDaysTrainEmpTest"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentTest2">
                                                                <canvas id="myChartMonthsTrainEmpTest"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentTest3">
                                                                <canvas id="myChartYearTrainEmpTest"></canvas>
                                                            </div>
                                                            <div class="tabs">
                                                                <div class="tab" onclick="changeTabTest(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                                <div class="tab" onclick="changeTabTest(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                                <div class="tab" onclick="changeTabTest(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>

                                        <!-- 1 -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hydro Motord</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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

                                        <!-- 3 -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Break Assembly</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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

                                        <!-- 4  -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hose</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Gear Boxe</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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
                                    <div id="tab-2" class="tab-content">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-lg-5 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Participants who faileds</p>
                                                            <h3 class="color20 fpw4">13503</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Participants who passed</p>
                                                            <h3 class="color20 fpw4">9004</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Participants who passed</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Passed</option>
                                                        <option>Failed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of employeek</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Annette Black</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Floyd Miles</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Jane Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Albert Flores</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Jenny Wilson</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">6. </td>
                                                        <td class="wid2" data-label="Due Date">Courtney Henry</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">7. </td>
                                                        <td class="wid2" data-label="Due Date">Arlene McCoy</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">8. </td>
                                                        <td class="wid2" data-label="Due Date">Wade Warren</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">9. </td>
                                                        <td class="wid2" data-label="Due Date">Esther Howard</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="wid1" data-label="Account">10. </td>
                                                        <td class="wid2" data-label="Due Date">Darrell Steward</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">11. </td>
                                                        <td class="wid2" data-label="Due Date">Ronald Richards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">12. </td>
                                                        <td class="wid2" data-label="Due Date">Bessie Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">13. </td>
                                                        <td class="wid2" data-label="Due Date">Cody Fisher</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">14. </td>
                                                        <td class="wid2" data-label="Due Date">Leslie Alexander</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/circle.png" /></span> &nbsp; Pass</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="tab-parent">
                                <div class="tab-container">
                                    <div class="tabs">
                                        <button class="tab-btn active" data-tab="tab1">Assessment Section</button>
                                        <button class="tab-btn" data-tab="tab2">Employee Report</button>
                                    </div>
                                    <div class="tab-content active" id="tab1">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-assessment">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                        <div class="graph-box-assessment">
                                                            <div class="content active" id="tabContentAssessment1">
                                                                <canvas id="myChartDaysAssessmentEmp"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentAssessment2">
                                                                <canvas id="myChartMonthsAssessmentEmp"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentAssessment3">
                                                                <canvas id="myChartYearAssessmentEmp"></canvas>
                                                            </div>
                                                            <div class="tabs">
                                                                <div class="tab" onclick="changeTabAssessment(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                                <div class="tab" onclick="changeTabAssessment(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                                <div class="tab" onclick="changeTabAssessment(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 p-1">
                                                    <div class="main-box-assessment">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Total no. of participants</p>
                                                            <h3 class="color20 fpw4">19305</h3>
                                                        </div>
                                                        <div class="graph-box-assessment-st">
                                                            <div class="content active" id="tabContentSt1">
                                                                <canvas id="myChartDaysStEmp"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentSt2">
                                                                <canvas id="myChartMonthsStEmp"></canvas>
                                                            </div>
                                                            <div class="content" id="tabContentSt3">
                                                                <canvas id="myChartYearStEmp"></canvas>
                                                            </div>
                                                            <div class="tabs">
                                                                <div class="tab active" onclick="changeTabSt(1)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Days</div>
                                                                <div class="tab" onclick="changeTabSt(2)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Months: Jan - Jul</div>
                                                                <div class="tab" onclick="changeTabSt(3)"><span><img src="assets/img/image/calendar.png" /></span> &nbsp; Years</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>

                                        <!-- 1 -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Manifold</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hydro Motord</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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

                                        <!-- 3 -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Break Assembly</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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

                                        <!-- 4  -->
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Hose</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Replacement of Gear Boxe</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                        <option>All Time</option>
                                                    </select>
                                                </div>
                                                <p class="color21">Total training participants:<span class="fpw6"> 19305</span></p>
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
                                    <div class="tab-content" id="tab2">
                                        <div class="mb20">
                                            <div class="row">
                                                <div class="col-lg-5 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Participants who faileds</p>
                                                            <h3 class="color20 fpw4">13503</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 p-1">
                                                    <div class="main-box-tem">
                                                        <div class="total-user-box">
                                                            <p class="color19 fpw6 fs14 ln20">Participants who passed</p>
                                                            <h3 class="color20 fpw4">9004</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 p-1"></div>
                                            </div>
                                        </div>
                                        <div class="flex-table-heading-box">
                                            <p class="fpw6 color21">Participants who passed</p>
                                            <div class="flex-item">
                                                <div>
                                                    <select>
                                                        <option>Passed</option>
                                                        <option>Failed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-box">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="fpw6">S.no.</th>
                                                        <th class="fpw6">Name of employeek</th>
                                                        <th class="fpw6">Pass / Fail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">1. </td>
                                                        <td class="wid2" data-label="Due Date">Annette Black</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Floyd Miles</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">3. </td>
                                                        <td class="wid2" data-label="Due Date">Jane Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">4. </td>
                                                        <td class="wid2" data-label="Due Date">Albert Flores</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">5. </td>
                                                        <td class="wid2" data-label="Due Date">Jenny Wilson</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">6. </td>
                                                        <td class="wid2" data-label="Due Date">Courtney Henry</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">7. </td>
                                                        <td class="wid2" data-label="Due Date">Arlene McCoy</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">8. </td>
                                                        <td class="wid2" data-label="Due Date">Wade Warren</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">9. </td>
                                                        <td class="wid2" data-label="Due Date">Esther Howard</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="wid1" data-label="Account">10. </td>
                                                        <td class="wid2" data-label="Due Date">Darrell Steward</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">11. </td>
                                                        <td class="wid2" data-label="Due Date">Ronald Richards</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">12. </td>
                                                        <td class="wid2" data-label="Due Date">Bessie Cooper</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">13. </td>
                                                        <td class="wid2" data-label="Due Date">Cody Fisher</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wid1" data-label="Account">14. </td>
                                                        <td class="wid2" data-label="Due Date">Leslie Alexander</td>
                                                        <td class="wid3" data-label="Amount"><span><img src="assets/img/image/red-circle.png" /></span> &nbsp; Fail</td>
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
                <div class="col-lg-1 col-sm-12"></div>
            </div>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>


    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/active.js"></script>
    <script src="assets/js/timeSpentMins.js"></script>





</body>

</html>