<?php
   /*
     Template Name: Bootstrap Example
   */

   ?>
<?php get_header(); ?>
<div class="container">
<div class="row">
   <div class="col-md-12">
      <div class="col-md-12">
         <div class="page-header">
            <h1>Kitchen Sink</h1>
         </div>
         <h3>Nav</h3>
         <nav class="navbar navbar-dark bg-inverse">
            <a class="navbar-brand" href="#">Navbar</a>
            <ul class="nav navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
               </li>
            </ul>
            <form class="form-inline navbar-form pull-right">
               <input class="form-control" type="text" placeholder="Search">
               <button class="btn btn-success-outline" type="submit">Search</button>
            </form>
         </nav>
         <hr>
         <h3>Breadcrumbs</h3>
         <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
         </ol>
         <hr>
         <h3>Buttons</h3>
         <button type="button" class="btn btn-primary-outline">Primary</button>
         <button type="button" class="btn btn-secondary-outline">Secondary</button>
         <button type="button" class="btn btn-success-outline">Success</button>
         <button type="button" class="btn btn-warning-outline">Warning</button>
         <button type="button" class="btn btn-danger-outline">Danger</button>
         <hr>
         <h3>Labels</h3>
         <span class="label label-default">Default</span>
         <span class="label label-primary">Primary</span>
         <span class="label label-success">Success</span>
         <span class="label label-info">Info</span>
         <span class="label label-warning">Warning</span>
         <span class="label label-danger">Danger</span>
         <hr>
         <h3>Pagination</h3>
         <nav>
            <ul class="pagination pagination-sm">
               <li>
                  <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                  </a>
               </li>
               <li><a href="#">1</a></li>
               <li><a href="#">2</a></li>
               <li><a href="#">3</a></li>
               <li>
                  <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
      <div class="col-md-6">
         <h3>Notifications</h3>
         <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
         </div>
         <div class="alert alert-warning alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
         </div>
         <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
         </div>
         <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
         </div>
      </div>
      <div class="col-md-6">
         <h3>Callouts</h3>
         <div class="card card-inverse" style="background-color: #333; border-color: #333;">
            <div class="card-block">
               <h3 class="card-title">Special title treatment</h3>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               <a href="#" class="btn btn-primary">Button</a>
            </div>
         </div>
         <div class="list-group">
            <a href="#" class="list-group-item active">
               <h4 class="list-group-item-heading">List group item heading</h4>
               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
               <h4 class="list-group-item-heading">List group item heading</h4>
               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
         </div>
      </div>
      <div class="col-md-6">
         <hr>
         <h3>Form Inputs</h3>
         <div class="form-group has-success">
            <label class="control-label" for="inputSuccess1">Input with success</label>
            <input type="text" class="form-control form-control-success" id="inputSuccess1">
         </div>
         <div class="form-group has-warning">
            <label class="control-label" for="inputWarning1">Input with warning</label>
            <input type="text" class="form-control form-control-warning" id="inputWarning1">
         </div>
         <div class="form-group has-error">
            <label class="control-label" for="inputError1">Input with error</label>
            <input type="text" class="form-control form-control-error" id="inputError1">
         </div>
         <div class="has-success">
            <div class="checkbox">
               <label>
               <input type="checkbox" id="checkboxSuccess" value="option1">
               Checkbox with success
               </label>
            </div>
         </div>
         <div class="has-warning">
            <div class="checkbox">
               <label>
               <input type="checkbox" id="checkboxWarning" value="option1">
               Checkbox with warning
               </label>
            </div>
         </div>
         <div class="has-error">
            <div class="checkbox">
               <label>
               <input type="checkbox" id="checkboxError" value="option1">
               Checkbox with error
               </label>
            </div>
         </div>
         <select class="c-select">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
         </select>
      </div>
      <div class="col-md-6">
         <hr>
         <h3>Sign In Form</h3>
         <form>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
               <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
               </div>
            </div>
            <div class="form-group row">
               <label class="col-sm-2">Radios</label>
               <div class="col-sm-10">
                  <div class="radio">
                     <label>
                     <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                     Option one is this and that&mdash;be sure to include why it's great
                     </label>
                  </div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="gridRadios" id="gridRadios2" value="option2">
                     Option two can be something else and selecting it will deselect option one
                     </label>
                  </div>
                  <div class="radio disabled">
                     <label>
                     <input type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                     Option three is disabled
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label class="col-sm-2">Checkbox</label>
               <div class="col-sm-10">
                  <div class="checkbox">
                     <label>
                     <input type="checkbox"> Check me out
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-secondary">Sign in</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<?php get_footer(); ?>
