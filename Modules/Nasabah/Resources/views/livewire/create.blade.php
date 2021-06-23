 <div class="page-inner">
     <div class="page-header">
         <h4 class="page-title">INI CREATE BRO</h4>
         <ul class="breadcrumbs">
             <li class="nav-home">
                 <a href="#">
                     <i class="flaticon-home"></i>
                 </a>
             </li>
             <li class="separator">
                 <i class="flaticon-right-arrow"></i>
             </li>
             <li class="nav-item">
                 <a href="#">Forms</a>
             </li>
             <li class="separator">
                 <i class="flaticon-right-arrow"></i>
             </li>
             <li class="nav-item">
                 <a href="#">Form Validation</a>
             </li>
         </ul>
     </div>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <div class="card-title">jQuery Validation</div>
                     <div class="card-category">Form validation with jQuery from <a
                             href="https://jqueryvalidation.org/">jQuery Validate</a></div>
                 </div>
                 <form id="exampleValidation" novalidate="novalidate">
                     <div class="card-body">
                         <div class="form-group form-show-validation row">
                             <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Nasabah <span
                                     class="required-label">*</span></label>
                             <div class="col-lg-4 col-md-9 col-sm-8">
                                 <input type="text" class="form-control" id="name" name="name" wire:model="nama"
                                     placeholder="Enter Username" required="">
                             </div>
                         </div>
                         <div class="form-group form-show-validation row">
                             <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat <span
                                     class="required-label">*</span></label>
                             <div class="col-lg-4 col-md-9 col-sm-8">
                                 <input type="text" class="form-control" id="name" name="name" wire:model="alamat"
                                     placeholder="Enter Username" required="">
                             </div>
                         </div>

                     </div>
                     <div class="card-action">
                         <div class="row">
                             <div class="col-md-12">
                                 <input class="btn btn-success" type="submit" value="Validate">
                                 <button class="btn btn-danger" wire:click="home">Cancel</button>
                             </div>
                         </div>
                     </div>
                 </form>
                 <button class="btn btn-danger" wire:click="home">HOME</button>
             </div>
         </div>
     </div>
 </div>
