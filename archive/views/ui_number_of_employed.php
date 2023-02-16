<?php
   
   session_start();
   require_once 'header.php';
   require_once 'sidebar.php';
   require_once 'topbar.php';
    
?>

                <!-- Begin Page Content -->
                <div class="row mb-3">
                            <div class="col-sm-0">
                                <h6 class="ml-5 text-warning"><strong>Batch</strong></h6>
                            </div>
                            <div class="col-sm-3 text-secondary">
                                <select name="civil status" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select> 
                            </div>
                            <div style="float:right;">  
                                     <button class="btn btn-flat btn-sm btn-light bg-gradient-light border text-dark ml-5 mb-4 py-2 px-4" type="button" id="print"><i class="fa fa-print"></i> Print</button>
                                 </div>
                            </div>
                                
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                                <div class="logo">
                                <img src="img/bisu.png" width="100px" height="100px" alt="" style="float: left" >
                                </div>
                                
                                
                            <div class="text-center  mr-5">
                             
                                <h6>Republic of the Philippines<h/6>
                                <h6><strong>Bohol Island State University</strong></h6>
                                <h6>Balilihan Campus<h/6>
                                <h6>Magsija, Balilihan, Bohol<h/6>
                               

                            </div>
                        </div>
                        <h6 class="text-center mt-3"><strong>NUMBER OF EMPLOYED GRADUATES</strong></h6>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <th>No. of Graduates</th>
                                            <th>No. of Graduates hired within 2 years after graduation</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    
                                        <tr>
                                        <td>BS Information Technology </td>
                                            <td>49</td>
                                            <td>27</td>
                                            <td>55</td>
                                        </tr>
                                        <tr>
                                        <td>BS Computer Science </td>
                                            <td>39</td>
                                            <td>17</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                        <td>BS Electrical Technology </td>
                                            <td>50</td>
                                            <td>30</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                        <td>BS Electronics Technology </td>
                                            <td>43</td>
                                            <td>27</td>
                                            <td>48</td>
                                        </tr>
                                        <tr>
                                        <td>BSIT Food Preparation & Service Management </td>
                                            <td>79</td>
                                            <td>67</td>
                                            <td>85</td>
                                        </tr>
                                        

                                        <tr>
                                            <td>TOTAL</td>
                                            <td>260</td>
                                            <td>168</td>
                                            <td>65</td>
                                        </tr>
                                        
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
 <?php
    require_once 'footer.php';
    
?>
  
           <noscript id="print-header">
    <div>
        <style>
            html{
                min-height:unset !important;
            }
        </style>
        <div class="d-flex w-100 align-items-center">
            <div class="col-2 text-center">
                
            </div>
            <div class="col-8">
            </div>
        </div>
        <hr>
    </div>
</noscript>
<script>
    function print_r(){
        var h = $('head').clone()
        var el = $('#printout').clone()
        var ph = $($('noscript#print-header').html()).clone()
        h.find('title').text("Number of Employed Graduates - Print View")
        var nw = window.open("", "_blank", "width="+($(window).width() * .8)+",left="+($(window).width() * .1)+",height="+($(window).height() * .8)+",top="+($(window).height() * .1))
            nw.document.querySelector('head').innerHTML = h.html()
            nw.document.querySelector('body').innerHTML = ph[0].outerHTML
            nw.document.querySelector('body').innerHTML += el[0].outerHTML
            nw.document.close()
            start_loader()
            setTimeout(() => {
                nw.print()
                setTimeout(() => {
                    nw.close()
                    end_loader()
                }, 200);
            }, 300);
    }
    $(function(){
        $('#filter-form').submit(function(e){
            e.preventDefault()
            location.href = 'ui_number_of_employed.php'+$(this).serialize()
        })
        $('#print').click(function(){
            print_r()
        })

    })
</script>           