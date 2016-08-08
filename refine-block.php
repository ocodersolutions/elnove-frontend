<div class="refine-colum">
    <ul>
        <?php include './refine_block/category-filter-block.php'; ?>
        <?php include './refine_block/brands-block.php'; ?>
        <?php include './refine_block/price-block.php'; ?>
        <?php include './refine_block/color-block.php'; ?>
        <?php include './refine_block/deals-block.php'; ?>
        <?php include './refine_block/size-block.php'; ?>
        <?php include './refine_block/store-block.php'; ?>
       
    </ul>
     <button id="submit" type="submit" form="form1" value="Submit">CLEAR FILTER</button>
</div>
<!-- popup-->
<div class="refine" style="display: none;">
<div  class="refine-colum" id="rfs-content-popup" >
    <p> REFINE SEARCH</p>
    <div class="option-filter">
        <div class="option-filter-row">
            <label><span>ALL</span></label>
            <input type="radio">
        </div>
            <div class="option-filter-row">
            <label><span>SALE</span></label>
            <input type="radio">
        </div>
       
        <div class="option-filter-row">
        <label><span>SAVE ITEMS</span></label>
        <input type="radio">
        </div>
    </div>
    <ul>
        <?php include './refine_block/category-filter-block.php'; ?>
        <?php include './refine_block/brands-block.php'; ?>
        <?php include './refine_block/price-block.php'; ?>
        <?php include './refine_block/color-block.php'; ?>
        <?php include './refine_block/deals-block.php'; ?>
        <?php include './refine_block/size-block.php'; ?>
        <?php include './refine_block/store-block.php'; ?>

      
        <div class="m-button-foot col-xs-12">
            <div class="col-xs-6 btn-refine" >
                <button type="submit" id="clear-submit" form="form1" value="Submit" name="clear-filter">CLEAR FILTER</button>
            </div>
            <div class="col-xs-6 btn-refine" >
                <button type="submit" id="apply-submit" form="form1" value="Submit" name="apply">APPLY</button>
            </div>
        </div>
    </ul>
</div>
</div>