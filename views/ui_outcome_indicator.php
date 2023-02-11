<?php

session_start();
require_once 'header.php';
require_once 'sidebar.php';
require_once 'topbar.php';

    
?>

                <!-- Begin Page Content -->
        <div class="row ml-0">
                <div class="mb-3">
                            <div class="col-sm-0">
                                <h6 class="ml-3 text-warning"><strong>Course</strong></h6>
                            </div>
                            <div class="col-sm-10 text-secondary ml-2">
                                <select name="civil status" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>Bachelor of Science in Information Technology</option>
                                    <option>Bachelor of Science in Computer Science</option>
                                    <option>Bachelor of Science in Electrical Technology</option>
                                    <option>Bachelor of Science in Electronics Technology</option>
                                    <option>Bachelor of Science in Industrial Technology Major in Food Technology</option>
                                    <option>All</option>
                                </select> 
                            </div>
                            </div>  
                <div class="mb-3">
                            <div class="col-sm-0">
                                <h6 class="ml-3 text-warning"><strong>Batch</strong></h6>
                            </div>
                            <div class="col-sm-15 text-secondary ml-2">
                                <select name="civil status" tabindex="-1" class="form-control form-control-user select2-hidden-accessible" aria-hidden="true" >
                                    
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select> 
                            </div>
                                  
                </div>
              <div class="mt-1">  
                <button class="btn btn-flat btn-sm btn-light bg-gradient-light border text-dark ml-5 mt-4 mb-4 py-2 px-4" type="button" id="print"><i class="fa fa-print"></i> Print</button>
             </div>
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" id="printout">
                        <div class="card-header py-3">
                               
                                <div class="logo">
                                <img src="img/bisu.png" width="100px" height="100px" alt="" style="float: left;" >
                                </div>
                                
                                
                            <div class="text-center mr-5">
                             
                                <h6>Republic of the Philippines<h/6>
                                <h6><strong>Bohol Island State University</strong></h6>
                                <h6>Balilihan Campus<h/6>
                                <h6>Magsija, Balilihan, Bohol<h/6>

                            </div>
                        </div>
                        <h6 class="text-center mt-3"><strong>OUTCOME INDICATOR 2 PERCENTAGE OF GRADUATES (2 YEARS) THAT ARE EMPLOYED</strong></h6>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Progam Name</th>
                                            <th>Name of Graduates</th>
                                            <th>Status</th>
                                            <th>Company Name/Type of Business</th>
                                            <th>Supporting Documents</th>
                                         
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>BS Information Technology</td>
                                            <td> Abrio, Aidel V.</td>
                                            <td>Employed</td>
                                            <td>Altasery, Inc</td>
                                            <td>Company ID</td>
                                           
                                        </tr>
                                        <tr>
                                        <td></td>
                                            <td>Bamuya, Relyn O.</td>
                                            <td>Unemployed</td>
                                            <td></td>
                                            <td></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Bayud, Vanessa Rose B.</td>
                                            <td>Employed</td>
                                            <td>Landbank</td>
                                            <td>COE</td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Biloy, Rieza C.</td>
                                            <td>Employed</td>
                                            <td>Triple-E</td>
                                            <td>Company ID</td>
                                           
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Borja, Hyanette Jay P.</td>
                                            <td>Employed</td>
                                            <td>ACS VA Information Services</td>
                                            <td>Company ID</td>
                                           
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Oñes, King Fernando, L.</td>
                                            <td>Not Tracked</td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Patac, Farley</td>
                                            <td>Not Tracked</td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                       
                                    
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->


            <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Total Number of Graduates</th>
                                            <th>Employed</th>
                                            <th>Unemployed</th>
                                            <th>Not Tracked</th>
                                         
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>7</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>2</td>
                                           
                                        </tr>
                                        
                                       
                                    
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->
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
        h.find('title').text("Outcome Indicator - Print View")
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
            location.href = 'ui_outcome_indicator'+$(this).serialize()
        })
        $('#print').click(function(){
            print_r()
        })

    })
</script>
          