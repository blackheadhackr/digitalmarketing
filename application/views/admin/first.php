<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <meta name="theme-color" content="#7952b3">
    <title>Sanatan sewadaar - Dashboard</title>
    <!-- top css file include -->
    <?php $this->load->view('admin/include/head');?>

</head>

<body>
    <!-- header include -->
    <?php $this->load->view('admin/include/header')?>
    <div class="container-fluid">
        <div class="row">
            <!-- sidebaar include -->
            <?php $this->load->view('admin/include/sidebar');?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>

                </div>
                <div class="table-responsive dashcol">
                    <div class="row">
                        <!-- first row card  -->
                        <div class="col-sm-3">
                            <div class="well" style="background: #7DA0FA;color:#fff">
                                <h4>Total Join Us</h4>
                                <p><?=count($joiner)?> Person</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #4747A1;color:#fff">
                                <h4>Total Blog Upload</h4>
                                <p><?=count($blog)?> Blog</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #7978E9;color:#fff">
                                <h4>Get Contact Data</h4>
                                <p><?=count($web_data)?> contect</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #F3797E;color:#fff">
                                <h4>Total Admin User</h4>
                                <p><?=count($table)?> admin user</p>
                            </div>
                        </div>
                        <!-- secound row card  -->
                        <div class="col-sm-3">
                            <div class="well" style="background: #944E63;color:#fff">
                                <h4>Gallery Image</h4>
                                <p><?=count($gallery)?> Total image</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #CAA6A6;color:#fff">
                                <h4>Total Blog</h4>
                                <p>100 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #B47B84;color:#fff">
                                <h4>Contect Data</h4>
                                <p>10 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #944E63;color:#fff">
                                <h4>Total Donation</h4>
                                <p>30%</p>
                            </div>
                        </div>
                        <!-- Third row card  -->
                        <div class="col-sm-3">
                            <div class="well" style="background: #B2533E;color:#fff">
                                <h4>Total User</h4>
                                <p>1 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #200E3A;color:#fff">
                                <h4>Total Blog</h4>
                                <p>100 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #186F65;color:#fff">
                                <h4>Contect Data</h4>
                                <p>10 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #0A1D56;color:#fff">
                                <h4>Total Donation</h4>
                                <p>30%</p>
                            </div>
                        </div>
                        <!-- Forth row card  -->
                        <div class="col-sm-3">
                            <div class="well" style="background: #52D3D8;color:#fff">
                                <h4>Total User</h4>
                                <p>1 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #3887BE;color:#fff">
                                <h4>Total Blog</h4>
                                <p>100 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #38419D;color:#fff">
                                <h4>Contect Data</h4>
                                <p>10 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #4942E4;color:#fff">
                                <h4>Total Donation</h4>
                                <p>30%</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #4B527E;color:#fff">
                                <h4>Total User</h4>
                                <p>1 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #2E4374;color:#fff">
                                <h4>Total Blog</h4>
                                <p>100 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #7C81AD;color:#fff">
                                <h4>Contect Data</h4>
                                <p>10 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well" style="background: #E25E3E;color:#fff">
                                <h4>Total Donation</h4>
                                <p>30%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <hr>
                <h1 class="text-center">USER DATA</h1>
                <hr> -->
                <!-- <div class="table-responsive">
                    <table id="userdata" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>StudentID</th>
                                <th>StudentName</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Marks Scored</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ST15</td>
                                <td>Varun</td>
                                <td>41</td>
                                <td>male</td>
                                <td>262</td>
                            </tr>
                            <tr>
                                <td>ST16</td>
                                <td>Waheeda</td>
                                <td>47</td>
                                <td>Female</td>
                                <td>373</td>
                            </tr>
                            <tr>
                                <td>ST17</td>
                                <td>Charu</td>
                                <td>31</td>
                                <td>female</td>
                                <td>475</td>
                            </tr>
                            <tr>
                                <td>ST18</td>
                                <td>Dhriti</td>
                                <td>45</td>
                                <td>female</td>
                                <td>227</td>
                            </tr>
                            <tr>
                                <td>ST19</td>
                                <td>Haritha</td>
                                <td>39</td>
                                <td>female</td>
                                <td>295</td>
                            </tr>
                            <tr>
                                <td>ST20</td>
                                <td>Faran</td>
                                <td>39</td>
                                <td>male</td>
                                <td>340</td>
                            </tr>
                            <tr>
                                <td>ST21</td>
                                <td>Gaurav</td>
                                <td>31</td>
                                <td>male</td>
                                <td>562</td>
                            </tr>
                            <tr>
                                <td>ST22</td>
                                <td>Fenny</td>
                                <td>41</td>
                                <td>Female</td>
                                <td>349</td>
                            </tr>
                            <tr>
                                <td>ST23</td>
                                <td>Mamta</td>
                                <td>29</td>
                                <td>Female</td>
                                <td>471</td>
                            </tr>
                            <tr>
                                <td>ST23</td>
                                <td>Kamat</td>
                                <td>44</td>
                                <td>male</td>
                                <td>319</td>
                            </tr>
                            <tr>
                                <td>ST15</td>
                                <td>Varun</td>
                                <td>41</td>
                                <td>male</td>
                                <td>262</td>
                            </tr>
                            <tr>
                                <td>ST16</td>
                                <td>Waheeda</td>
                                <td>47</td>
                                <td>Female</td>
                                <td>373</td>
                            </tr>
                            <tr>
                                <td>ST17</td>
                                <td>Charu</td>
                                <td>31</td>
                                <td>female</td>
                                <td>475</td>
                            </tr>
                            <tr>
                                <td>ST18</td>
                                <td>Dhriti</td>
                                <td>45</td>
                                <td>female</td>
                                <td>227</td>
                            </tr>
                            <tr>
                                <td>ST19</td>
                                <td>Haritha</td>
                                <td>39</td>
                                <td>female</td>
                                <td>295</td>
                            </tr>
                            <tr>
                                <td>ST20</td>
                                <td>Faran</td>
                                <td>39</td>
                                <td>male</td>
                                <td>340</td>
                            </tr>
                            <tr>
                                <td>ST21</td>
                                <td>Gaurav</td>
                                <td>31</td>
                                <td>male</td>
                                <td>562</td>
                            </tr>
                            <tr>
                                <td>ST22</td>
                                <td>Fenny</td>
                                <td>41</td>
                                <td>Female</td>
                                <td>349</td>
                            </tr>
                            <tr>
                                <td>ST23</td>
                                <td>Mamta</td>
                                <td>29</td>
                                <td>Female</td>
                                <td>471</td>
                            </tr>
                            <tr>
                                <td>ST23</td>
                                <td>Kamat</td>
                                <td>44</td>
                                <td>male</td>
                                <td>319</td>
                            </tr>
                            <tr>
                                <td>ST15</td>
                                <td>Varun</td>
                                <td>41</td>
                                <td>male</td>
                                <td>262</td>
                            </tr>
                            <tr>
                                <td>ST16</td>
                                <td>Waheeda</td>
                                <td>47</td>
                                <td>Female</td>
                                <td>373</td>
                            </tr>
                            <tr>
                                <td>ST17</td>
                                <td>Charu</td>
                                <td>31</td>
                                <td>female</td>
                                <td>475</td>
                            </tr>
                            <tr>
                                <td>ST18</td>
                                <td>Dhriti</td>
                                <td>45</td>
                                <td>female</td>
                                <td>227</td>
                            </tr>
                            <tr>
                                <td>ST19</td>
                                <td>Haritha</td>
                                <td>39</td>
                                <td>female</td>
                                <td>295</td>
                            </tr>
                            <tr>
                                <td>ST20</td>
                                <td>Faran</td>
                                <td>39</td>
                                <td>male</td>
                                <td>340</td>
                            </tr>
                            <tr>
                                <td>ST21</td>
                                <td>Gaurav</td>
                                <td>31</td>
                                <td>male</td>
                                <td>562</td>
                            </tr>
                            <tr>
                                <td>ST22</td>
                                <td>Fenny</td>
                                <td>41</td>
                                <td>Female</td>
                                <td>349</td>
                            </tr>
                            <tr>
                                <td>ST23</td>
                                <td>Mamta</td>
                                <td>29</td>
                                <td>Female</td>
                                <td>471</td>
                            </tr>
                            <tr>
                                <td>ST23</td>
                                <td>Kamat</td>
                                <td>44</td>
                                <td>male</td>
                                <td>319</td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </main>
        </div>
    </div>

    <!-- footer links include -->
    <?php $this->load->view('admin/include/footerlink')?>
    <script>
    $(document).ready(function() {
    $('#userdata').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
</body>

</html>