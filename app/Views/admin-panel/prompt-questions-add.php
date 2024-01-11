<?php $pagename = 'category'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Admin Prompt Add</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <?php include("top-script.php"); ?>
</head>

<body class="fixed-header menu-pin menu-behind">
  <!-- BEGIN SIDEBPANEL-->
  <nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
      <div class="row">
        <div class="col-sm-6 no-padding">
          <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/social_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-sm-6 no-padding">
          <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/email_app.svg" alt="socail">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 m-t-20 no-padding">
          <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/calendar_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-sm-6 m-t-20 no-padding">
          <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/add_more.svg" alt="socail">
          </a>
        </div>
      </div>
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <?php include("top-side-bar.php"); ?>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <?php include("left-menu.php"); ?>
      <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
  </nav>
  <!-- END SIDEBAR -->
  <!-- END SIDEBPANEL-->
  <!-- START PAGE-CONTAINER -->
  <div class="page-container ">
    <!-- START HEADER -->
    <?php include("top-bar.php"); ?>
    <!-- END HEADER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
      <!-- START PAGE CONTENT -->
      <div class="content ">
        <!-- MODAL STICK UP  -->

        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax">
          <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
              <!-- START BREADCRUMB -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>innova-admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>innova-admin/prompt-questions">Prompt</a></li>
                <li class="breadcrumb-item active">Prompt Add</li>
              </ol>
              <!-- END BREADCRUMB -->
            </div>
          </div>
        </div>
        <!-- END JUMBOTRON -->

        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg p-t-30">
          <!-- START card -->
          <div class="card card-default">

            <div class="card-body">
              <h2 class="mw-80">Get started with your Prompt.</h2>
              <form id="form-personal" class="p-t-15" role="form" autocomplete="off" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>innova-admin/prompt-questions-add">
                <div class="row clearfix">
                  <div class="col-xl-6 controls">
                    <label for="categorySelect" class="form-label">Select Category</label>
                    <select class="form-select" id="category_id" name="category_id" data-init-plugin="select2">
                      <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="col-xl-6 controls">
                    <label for="modelSelect" class="form-label">Select Model</label>
                    <select class="form-select" id="model_name" name="model_name" data-init-plugin="select2">
                      <option value="gpt-3.5-turbo">GPT-3.5 Turbo</option>
                      <option value="gpt-4">GPT-4</option>
                    </select>
                  </div>
                </div>
                
                <div class="row clearfix pt-2">
                  <div class="col-xl-12">
                    <div class="form-group form-group-default controls">
                      <label>Icon</label>
                      <img src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar.jpg" style="width:50px">
                      <input type="file" class="form-control" name="question_icon" id="question_icon">
                    </div>
                  </div>
                </div>

                <div class="row clearfix pt-2">
                  <div class="col-xl-12 controls">
                    <div class="form-group form-group-default required controls">
                      <label>Prompt Title</label>
                      <input type="text" class="form-control" name="question_title" id="question_title" required>
                    </div>
                  </div>
                </div>


                <div class="row clearfix pt-2">
                  <div class="col-xl-12">
                    <div class="form-group form-group-default controls required">
                      <label>Short Description</label>
                      <textarea class="form-control" id="question_desc" name="question_desc" rows="3" style="min-height:80px" required></textarea>
                    </div>
                  </div>
                </div>

                <div class="row clearfix pt-2">
                  <div class="col-xl-12 ">
                    <label for="formFieldRepeater" class="form-label">Select Form Field</label>
                    <div id="formFieldRepeater">
                      <div class="row mb-3 formField">
                        <div class="col-xl-4 required">
                          <select class="form-select m-b-10 fieldType" name="filed_type[]" id="fieldType_0" required>
                            <option value="" selected>Select Type</option>
                            <option value="textbox">Text Box</option>
                            <option value="textarea">Text Area</option>
                            <option value="selectbox">Select</option>
                            <option value="headbox">Message</option>
                          </select>
                          <input type="text" class="form-control m-b-10 filed_label d-none" name="filed_label[]" id="filed_label_0" value="" placeholder="Filed Lebel">
                          <input type="text" class="form-control m-b-10 filed_sub_head d-none" name="filed_sub_head[]" id="filed_sub_head_0" value="" placeholder="Filed Sub Heading">
                           
                          <input type="text" class="filed_name d-none" name="filed_name[]" id="filed_name_0" value="" style="border:0px; background:#FFFFFF" readonly>
                          <i class="pg-icon copyField d-none" id="copyField_0" style="cursor:pointer" Title="Copy Shortcode">copy</i>
                        </div>

                        <div class="col-xl-6 selectOptions d-none">
                          <textarea class="form-control" rows="2" name="filed_value[]" placeholder="Enter options (comma-separated)" style="resize:none" id="selectOptions_0"></textarea>
                        </div>

                        <div class="col-xl-2">
                          <button type="button" class="btn btn-danger deleteField">Delete</button>
                        </div>
                      </div>
                    </div>

                    <button type="button" class="btn btn-primary addField">Add More</button>
                  </div>
                </div>

                <div class="row clearfix pt-3">
                  <div class="col-xl-12">
                    <div class="form-group form-group-default required">
                      <label>Prompt</label>
                      <textarea class="form-control" id="question_prompt" name="question_prompt" rows="3" style="min-height:350px" required></textarea>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 controls">
                <label for="modelSelect" class="form-label">Prompt Image Creation</label>
                <select class="form-select" id="question_image" name="question_image" data-init-plugin="select2" required>
                    <option value="" selected>Select</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                  </select>
                </div>

                <div class="clearfix"></div>
                <div class="row m-t-25">
                  <div class="col-xl-6 p-b-10">
                  </div>
                  <div class="col-xl-6">
                    <button aria-label="" name="catsubmit" id="catsubmit" class="btn btn-primary pull-right btn-lg btn-block w-25" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END card -->
        </div>
      </div>

      <div class=" container-fluid  container-fixed-lg footer">
        <?php include("copy-right.php"); ?>
      </div>
      <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
  </div>

  <?php include("bottom-script.php"); ?>

  <script>
    $(document).ready(function() {
      var fieldCount = 0;

      // Function to add a new field
      $('.addField').click(function() {
        var newField = $('#formFieldRepeater .formField').first().clone();
        fieldCount++;
        newField.find('.fieldType').attr('name', 'filed_type[]');
        newField.find('.fieldType').attr('id', 'fieldType_' + fieldCount);
        newField.find('.selectOptions').addClass('d-none');
        newField.find('.deleteField').removeClass('d-none'); 


        newField.find('.filed_name').attr('name', 'filed_name[]');
        newField.find('.filed_name').attr('id', 'filed_name_' + fieldCount);
		
		newField.find('.filed_label').attr('name', 'filed_label[]');
        newField.find('.filed_label').attr('id', 'filed_label_' + fieldCount);
		
		newField.find('.filed_sub_head').attr('name', 'filed_sub_head[]');
        newField.find('.filed_sub_head').attr('id', 'filed_sub_head_' + fieldCount);

        // Unique ID generation for textarea
        var textareaId = 'selectOptions_' + fieldCount;
        newField.find('.selectOptions textarea').attr('name', 'filed_value[]');
        newField.find('.selectOptions textarea').attr('id', textareaId);
        newField.find('.selectOptions label').attr('for', textareaId);

        // Add copyField button with a unique ID
        var copyFieldId = 'copyField_' + fieldCount;
        newField.find('.copyField').attr('id', copyFieldId);

        $('#formFieldRepeater').append(newField);

        $('#filed_name_' + fieldCount).val('');
		$('#filed_label_' + fieldCount).val('');
		$('#filed_sub_head_' + fieldCount).val('');
		$('#copyField_' + fieldCount).addClass('d-none');
		$('#filed_label_' + fieldCount).addClass('d-none');
		$('#filed_sub_head_' + fieldCount).addClass('d-none');  
		//alert(fieldCount);

      });

      // Function to delete a field, excluding the first one
      $(document).on('click', '.deleteField', function() {
        var formFields = $('.formField');
        if (formFields.length > 1) {
          $(this).closest('.formField').remove();
        } else {
          alert("Cannot delete the first field.");
        }
      });


      // Function to delete a field, excluding the first one
      $(document).on('click', '.copyField', function() {
        var inputFieldId = $(this).closest('.formField').find('.filed_name').attr('id');
        var inputField = document.getElementById(inputFieldId);

        // Select the content of the input field
        inputField.select();
        inputField.setSelectionRange(0, 99999); // For mobile devices

        // Copy the selected text to clipboard
        document.execCommand('copy');
      });



      // Toggle select options visibility
      $(document).on('change', '.fieldType', function() {
        var selectedFieldType = $(this).val();
        var selectOptionsField = $(this).closest('.formField').find('.selectOptions');
        var textareaID = $(this).attr('id');
        var myArrayId = textareaID.split("_");

        var category_id = $('#category_id').val();

        var randomString = category_id + '_' + selectedFieldType + '_' + Math.random().toString(36).substring(7);
        $('#filed_name_' + myArrayId[1]).val('');

        if (selectedFieldType === 'selectbox') {
          selectOptionsField.removeClass('d-none');

          $('#filed_name_' + myArrayId[1]).prop('readonly', false);
          $('#filed_name_' + myArrayId[1]).val(randomString);

          $("#selectOptions_" + myArrayId[1]).attr("required", true);


        } else {
          //selectOptionsField.addClass('d-none');
          selectOptionsField.addClass('d-none');

          $('#filed_name_' + myArrayId[1]).val(randomString);
          $('#filed_name_' + myArrayId[1]).prop('readonly', true);
          $("#selectOptions_" + myArrayId[1]).attr("required", false);
        }
		
        if (selectedFieldType === 'selectbox' || selectedFieldType === 'textbox' || selectedFieldType === 'textarea' || selectedFieldType === 'headbox') {
          $('#copyField_' + myArrayId[1]).removeClass('d-none');
          $('#filed_name_' + myArrayId[1]).removeClass('d-none');
		  $('#filed_label_' + myArrayId[1]).removeClass('d-none');
		  $("#filed_label_" + myArrayId[1]).attr("required", true);
		  
		  $('#filed_sub_head_' + myArrayId[1]).removeClass('d-none');
		  $("#filed_sub_head_" + myArrayId[1]).attr("required", true);
		  
        }else{
          $('#copyField_' + myArrayId[1]).addClass('d-none');
          $('#filed_name_' + myArrayId[1]).addClass('d-none');
		  $('#filed_label_' + myArrayId[1]).addClass('d-none');
		  $("#filed_label_" + myArrayId[1]).attr("required", false);
		  
		  $('#filed_sub_head_' + myArrayId[1]).addClass('d-none');
		  $("#filed_sub_head_" + myArrayId[1]).attr("required", false);
        }
		
		 if(selectedFieldType === 'headbox'){
			$('#filed_label_' + myArrayId[1]).attr('placeholder', 'Heading Label');
		}
		else {
		$('#filed_label_' + myArrayId[1]).attr('placeholder', 'Filed Lebel');
		}
		
      });
    });
  </script>


</body>

</html>