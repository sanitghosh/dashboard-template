<?php include_once("header.php"); ?>

<!-- Main content / Dynanmic  -->
<section class="main_content_area padLeftRight">
    <div class="top_title row justify-content-between align-items-center">
        <div class="col-md-5">
            <h2>Products</h2>
        </div>
        <div class="col-md-5 text-end ">
            <!-- <a href="add-counselling.php" type="button" class="addBtn btn btn-primary px-3"> Add </a> -->
        </div>
    </div>

    <div class="booking_container  pt-0 bg-white  rounded-1">

        <!-- Booking tables -->

        <table width="100%" class="status_table">
            <thead>
                <tr>
                    <th style="width: 20%;">Name</th>
                    <th style="width: 20%;">Category</th>
                    <th style="width: 20%;">Seller Price</th>
                    <th style="width: 20%;">Picture</th>
                    <th style="width: 20%;">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mayor kelly</td>
                    <td>Lorem ipsum</td>
                    <td>$100</td>
                    <td><img src="./images/user.jpg" alt=""></td>
                    <td class="action-cont">
                        <button title="View" class="view">
                            <a href="view-product.php">
                                View
                            </a>
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#BlockedItems" title="Blocked" class="blocked">
                            Block
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>





    </div>
</section>



</div>
</div>

</main>
<div class="modal fade modal-table" id="BlockedItems" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="BlockedItemsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0 px-0">
                <div class="highlight_title d-flex align-items-center w-100">
                    <h4>Confirmation</h4>
                    <div class="clseBtn ms-auto">
                        <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>
                </div>

            </div>


            <div class="modal-body border-0">
                <div class="mb-2">
                    <h2 class="fs-6">Are you sure you want to block product - product name</h2>
                </div>
                <form class="form">
                    <div class="form-item">
                        <Label>Reason:</Label>
                        <textarea name="" id=""></textarea>
                    </div>
                    <div class="submit mt-4">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>