<style>
    .filter-option-inner-inner {
        color: black;
        letter-spacing: 0em;
        font-weight:normal;
        font-size: 15px;
    }

    .dropdown-toggle::after {
        color: black;
    }
</style>




<section class="d-flex align-items-center dark-overlay bg-cover" style="background-image: url(https://room.com/a/tomorrow/wp-content/uploads/2020/09/AdobeStock_344522037-scaled.jpg);">
    <div class="container py-6 py-lg-7 text-white overlay-content">
        <div class="row">
            <div class="col-xl-8">
                <h1 class="display-3 fw-bold text-shadow">Connection Awaits</h1>
                <p class="text-lg text-shadow mb-6">Safely connect with those around you through an icebreaker prompt</p>
            </div>
        </div>
    </div>
</section>
<div class="container position-relative mt-n6 z-index-20">
    <div class="search-bar search-bar-with-tabs p-3 p-lg-4">
        <div class="row">
            <div class="mb-4">
                <?php echo form_open('home/submit'); ?>
        <input type="hidden" name="table" value="<?php echo $table; ?>">
        <input type="hidden" name="store" value="<?php echo $store; ?>">

                    <label class="form-label">What is your intention?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="guests_0" name="intention" value="1">
                        <label class="form-check-labelg" for="guests_0">Friends - Spark meaningful conversation</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="guests_1" name="intention" value="2">
                        <label class="form-check-label" for="guests_1">Networking - Professionally driven topics</label>
                    </div>
                  </br>
                    <label class="form-label">How long will you be at your spot?</label>
                    <div class="col-md-6 col-lg-3 d-flex align-items-center form-group no-divider">
                        <select class="form-label selectpicker" title="Select Estimated Time" data-style="btn-selectpicker" name="store_eta">
                            <option value="1">30 minutes</option>
                            <option value="2">30 minutes - 1 hour</option>
                            <option value="3">1 hour - 2 hours</option>
                            <option value="4">+2 hours</option>
                        </select>
                    </div>
              </div>

                    <div class="col-lg-2 d-grid form-group mb-0">
                        <button class="btn btn-primary h-100" type="submit">Continue</button>
                    </div>
              <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
