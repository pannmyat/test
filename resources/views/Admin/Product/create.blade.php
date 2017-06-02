@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>New Product</title>
</head>
<body>    
    <div class="container"> 
      @include('layouts.adminslidebar')       
      <div class="row">      
          <div id="Product_main">
            <form class="form-horizontal" action='' method="POST">
            <fieldset>
                <div class="col-lg-12 form-group margin50">
                  <label class="col-lg-2"  for="Name">Name</label>
                  <div class="col-lg-4">
                    <input type="text" id="name" name="Name" placeholder="" class="form-control name">
                  </div>
                </div>
     
                <div class=" col-lg-12 form-group">
                  <label class="col-lg-2" for="ProductType">Product Type</label>
                  <div class="col-lg-4">
                    <select id="productType" name="ProductType" class="form-control product-type">
                        <option value="0">-Select-</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="Manufacturer">Manufacturer</label>
                  <div class="col-lg-4">
                    <select id="manufacturer" name="Manufacturer" class="form-control manufacturer">
                        <option value="0">-Select-</option>
                    </select>
                    <p class="help-block"><a>Manufacturer Quick Add</a></p>
                  </div>
                </div>    
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="Distributor">Distributor</label>
                  <div class="col-lg-4">
                    <select id="distributor" name="Distributor" class="form-control distributor">
                        <option value="0">-Select-</option>
                    </select>
                    <p class="help-block"><a>Distributor Quick Add</a></p>
                  </div>
                </div> 
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="SKU">SKU</label>
                  <div class="col-lg-4">
                    <input type="text" id="sku" name="SKU" placeholder="" class="form-control sku">
                  </div>
                </div> 
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="ManufacturerPart">Manufacturer Part</label>
                  <div class="col-lg-4">
                    <input type="text" id="manufacturerPart" name="ManufacturerPart" placeholder="" class="form-control manufacturer-part">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="Published">Published</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="Published" class="input-xlarge"><span>No</span>
                     <input type="radio"  name="Published" checked class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="Featured">Featured</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="Featured" class="input-xlarge"><span>No</span>
                     <input type="radio"  name="Featured" checked class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="PageDisplay">Page Display</label>
                  <div class="col-lg-4">
                    <select id="pageDisplay" name="PageDisplay" class="form-control page-display">
                        <option value="0">-Select-</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="ColumnWidth">Column Width</label>
                  <div class="col-lg-4">
                    <input type="text" id="columnWidth" name="ColumnWidth" placeholder="" class="form-control column-width">
                  </div>
                </div>
                 <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="TaxClass">Tax Class</label>
                  <div class="col-lg-4">
                    <select id="taxClass" name="TaxClass" class="form-control tax-class">
                        <option value="0">-Select-</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="QuantityDiscountTable">Quantity Discount Table</label>
                  <div class="col-lg-4">
                    <select id="quantityDiscount" name="QuantityDiscountTable" class="form-control quantity-discount">
                        <option value="0">-Select-</option>
                    </select>
                    <p class="help-block"><a>Quantity Discount Quick Add</a></p>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="ShowBuyButton">Show Buy Button</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="ShowBuyButton" class="input-xlarge"><span>No</span>
                     <input type="radio"  name="ShowBuyButton" checked class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="RequiresRegistrationToView">Requires Registration To View</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="RequiresRegistrationToView" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="RequiresRegistrationToView"  class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="CallToOrder">Is Call To Order</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="CallToOrder" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="CallToOrder"  class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="HidePriceUntilCart">Hide Price Until Cart</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="HidePriceUntilCart" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="HidePriceUntilCart"  class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                 <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="ProductFeeds">Exclude From Product Feeds</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="ProductFeeds" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="ProductFeeds"  class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="Kit">Is a Kit</label>
                  <div class="col-lg-2">
                    <input type="radio"  name="Kit" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="Kit"  class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                 <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="Inventory">Track Inventory By Size and Color</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="Inventory" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="Inventory"  class="input-xlarge"><span>Yes</span>
                  </div>
                </div>
                  <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="ColorOptionPrompt">Color Option Prompt</label>
                  <div class="col-lg-4">
                    <input type="text" id="colorOptionPrompt" name="ColorOptionPrompt" placeholder="" class="form-control color-option-prompt">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="col-lg-2" for="SizeOptionPrompt">Size Option Prompt</label>
                  <div class="col-lg-4">
                    <input type="text" id="sizeOptionPrompt" name="SizeOptionPrompt" placeholder="" class="form-control size-option-prompt">
                  </div>
                </div>
                 <div class="col-lg-12 form-group">
                  <label class="col-lg-2"  for="RequiresTextField">Requires Text Field</label>
                  <div class="col-lg-4">
                    <input type="radio"  name="RequiresTextField" checked class="input-xlarge"><span>No</span>
                     <input type="radio"  name="RequiresTextField"  class="input-xlarge"><span>Yes</span>
                     <p class="help-block">
                         <span>Field Prompt </span><input type="text" id="fieldPrompt" name="FieldPrompt" placeholder="" class="form-control field-prompt">
                     </p>
                     <p class="help-block">
                     <span>Max Length </span><input type="text" id="maxLength" name="MaxLength" placeholder="" class="form-control max-length">
                     </p>
                  </div>
                </div>
    
              </fieldset>
              </form>
            </div> 
     
                   
            <div id="Product_Images" class="tab-pane"><div class="col-lg-12 form-group margin50">
              <label class="col-sm-2" for="FilenameOverride">Image Filename Override</label>
              <div class="col-sm-4">
                <input class="form-control" type="text" id="filenameOverride" placeholder="">
              </div>
            </div>
            <div class="col-lg-12 form-group">
              <label class="col-sm-2" for="exampleInputFile">Small</label>
              <div class="col-sm-4">
                <input type="file" id="small">
              </div>
            </div>
            
            <div class="col-lg-12 form-group">
              <label class="col-sm-2" for="exampleInputFile">Medium</label>
              <div class="col-sm-4">
                <input type="file" id="medium">
              </div>
            </div>
            
            <div class="col-lg-12 form-group">
              <label class="col-sm-2" for="exampleInputFile">Large</label>
                <div class="col-sm-4">
                <input type="file" id="large">
              </div>
            </div>
          </div>  
              
    </div>
            
</body>
</html>
@endsection
