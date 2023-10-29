    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="text-block">
            </div>
            <div class="text-block">
      <?php echo form_open('prompt/submit'); ?>

        <input type="hidden" name="table" value="<?php echo $table; ?>">
        <input type="hidden" name="store" value="<?php echo $store; ?>">
        <input type="hidden" name="intention" value="<?php echo $intention; ?>">
        <input type="hidden" name="store_eta" value="<?php echo $store_eta; ?>">

              <label class="h5" for="form_guests">Choose Prompt</label>
              <div class="row">
                <div class="col-lg-12 mb-3">
              <?php if ($intention == 1) : ?>

                  <select class="selectpicker form-control" name="prompt" id="form_guests" data-style="btn-selectpicker" title=" "id="topSelect">
                    <option value="1">Ideal night out is...</option>
                    <option value="2">Must See Movie...</option>
                    <option value="3">Go-to song...</option>
                    <option value="4">Beach or Mountains...</option>
                    <option value="5">Last book I read...</option>
                    <option value="6">If I had three wishes, I'd wish for...</option>
                    <option value="7">Greatest travel story...</option>
                    <option value="8">I'm most grateful for...</option>
                    <option value="9">After work you can find me...</option>
                    <option value="10">We'll get along if...</option>
                  </select>
              <?php else : ?>

                  <select class="selectpicker form-control" name="prompt" id="form_guests" data-style="btn-selectpicker" title=" "id="bottomSelect">
                    <option value="11">My secret work talent...</option>
                    <option value="12">How I stay Informed...</option>
                    <option value="13">Introverted or Extroverted...</option>
                    <option value="14">Favorite interview question...</option>
                    <option value="15">Dream mentor...</option>
                    <option value="16">My work mantra...</option>
                    <option value="17">I stay motivated by...</option>
                    <option value="18">Success to me means...</option>
                    <option value="19">WFH or Office?...</option>
                    <option value="20">In early or stay late?...</option>
                  </select>

                            <?php endif; ?>

                </div>
            <div class="text-block">
              <div class="d-flex">
                <div>
                  <h5>Your Answer</h5>
                  <p class="text-sm text-muted">Make it as long or as short as you would like...</p>
                </div>
              </div>
              <textarea class="form-control" name="answer" rows="4"></textarea>
            </div>
        </div>
<!--               <div class="col text-center text-sm-end"><a class="btn btn-primary px-3" type="submit">Submit<i class="fa-chevron-right fa ms-2"></i></a></div>
 -->                      
</br>     
                      <div class="col text-center text-sm-end">   <button class="btn btn-primary px-3" type="submit">Submit<i class="fa-chevron-right fa ms-2"></i></button></div>







  <?php echo form_close(); ?>




            </div>
          </div>
          
      </div>
    </section>
