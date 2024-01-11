<?php
$pagename = 'tools';
if ($project[0]->question_icon != '' && file_exists('uploads/questionicon/' . $project[0]->question_icon)) {
    $question_icon = base_url() . 'uploads/questionicon/' . $project[0]->question_icon;
} else {
    $question_icon = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
}

include 'include/header.php';
?>
<!-- Include the Twitter SDK -->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php include 'include/main-header.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Member Tool List</h4>
            </div>
        </div>
    </div>
</section>

<!-- Tool Heading -->
<section class="toolDetailsOne py-60 pt-0">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 headSec">
                <div class="row align-items-center gap-y1">
                    <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btnPrimary">
                            New Project <em class="icon-plus"></em>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h3>
                            <img src="<?php echo $question_icon; ?>" alt="">
                            <?php echo stripslashes($project[0]->question_title); ?> |
                            <small>
                                <?php echo stripslashes($project[0]->question_desc); ?>
                            </small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-12 bodySec">
                <div class="row gap-y2">
                    <div class="col-lg-3 col-md-4">
                        <!-- Sidebar -->
                        <?php include 'include/profileSidebar.php'; ?>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <form name="create_<?php echo $project[0]->prompt_question_id; ?>"
                            id="create_<?php echo $project[0]->prompt_question_id; ?>" method="post" action="">
                            <div class="progressArea">
                                <div class="progress customProgress">
                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="70"></div>
                                </div>
                                <small>70 Complete%</small>
                            </div>

                            <?php
                            foreach ($projectfields as $projectfield) {
                                $filed_label = stripslashes($projectfield->filed_label);
                                $filed_sub_head = stripslashes($projectfield->filed_sub_head);
                                $filed_type = $projectfield->filed_type;
                                $filed_name = $projectfield->filed_name;

                                ?>

                                <?php if ($filed_type == 'headbox') { ?>

                                    <div class="form-group">
                                        <h6><label for="">
                                                <?php echo $filed_label; ?> <sup>*</sup>
                                            </label></h6>
                                    </div>

                                <?php } ?>

                                <?php
                                if ($filed_type == 'selectbox') {
                                    if ($projectfield->filed_value != '') {
                                        $filed_value = explode(",", $projectfield->filed_value);
                                    } else {
                                        $filed_value = array();
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="">
                                            <?php echo $filed_label; ?> <sup>*</sup>
                                        </label>
                                        <div class="inputBox rightIcon">
                                            <select name="<?php echo $filed_name; ?>" id="<?php echo $filed_name; ?>"
                                                class="form-control" required>
                                                <option value="">Select</option>
                                                <?php for ($i = 0; $i < count($filed_value); $i++) { ?>
                                                    <option value="<?php echo $filed_value[$i]; ?>">
                                                        <?php echo $filed_value[$i]; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <em class="icon-angleDown emRight"></em>
                                        </div>
                                        <small>
                                            <?php echo $filed_sub_head; ?>
                                        </small>
                                    </div>
                                <?php } ?>

                                <?php if ($filed_type == 'textarea') { ?>
                                    <div class="form-group">
                                        <label for="">
                                            <?php echo $filed_label; ?> <sup>*</sup>
                                        </label>
                                        <div class="inputBox rightIcon">
                                            <textarea class="form-control" name="<?php echo $filed_name; ?>"
                                                id="<?php echo $filed_name; ?>" style="resize:none" required></textarea>
                                        </div>
                                        <small>
                                            <?php echo $filed_sub_head; ?>
                                        </small>
                                    </div>
                                <?php } ?>

                                <?php if ($filed_type == 'textbox') { ?>
                                    <div class="form-group">
                                        <label for="">
                                            <?php echo $filed_label; ?> <sup>*</sup>
                                        </label>
                                        <div class="inputBox rightIcon">
                                            <input type="text" class="form-control" name="<?php echo $filed_name; ?>"
                                                id="<?php echo $filed_name; ?>" value="" placeholder="" required>
                                        </div>
                                        <small>
                                            <?php echo $filed_sub_head; ?>
                                        </small>
                                    </div>
                                <?php } ?>

                            <?php } ?>

                            <div class="">
                                <button class="btn btnPrimary w-100" id="submit-button">Create It <em
                                        class="icon-arrowRight"></em></button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-5 col-md-4 postVer">
                    	<?php if($project[0]->question_image == 'Y') { ?>
                        <form action="">
                            <div class="form-group m-0">
                                <label for="">Create your post</label>
                                <div class="inputBox rightIcon">
                                    <input type="text" id="post_image" class="form-control" placeholder="">
                                    <em class="icon-info emRight"></em>
                                </div>
                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quam veritatis
                                    incidunt qui aliquam ad.</small>
                            </div>
                            <div class="form-group m-0">
                                <div class="fileUploader">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6>Upload Your Logo</h6>
                                            <p>Upload image (8M Max)</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="imgUploaer">
                                                <input type="file" id="uploadInput">
                                                <div class="boxSec">
                                                    <em class="icon-upload"></em>
                                                    <p>
                                                        <span>Click to upload</span> or drag and drop
                                                        <small>PNG, JPG or GIF (max. 8MB)</small>
                                                    </p>
                                                </div>
                                                <span class="btn btnPrimary style2 w-100">Add Logo</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="imgSec" id="generated_image">
                                                <img id="uploadedImage" src="https://placehold.co/600x400/EEE/31343C" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                        <div class="chat-container" id="chat-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

<?php
$question_title = stripslashes($project[0]->question_title);
$question_prompt = stripslashes($project[0]->question_prompt);
$model_name = $project[0]->model_name;
?>
<script>
    // Function to toggle the bgPost class and btnShort visibility
    const togglePostVerInner = (element, version) => {
        const postVerInnerDiv = document.querySelector(`.post-ver-${version} .post-ver-inner`);
        const btnShortDiv = document.querySelector(`.post-ver-${version} .btnShort`);

        if (postVerInnerDiv) {
            postVerInnerDiv.classList.toggle('bgPost', element.checked);
        }

        if (btnShortDiv) {
            btnShortDiv.classList.toggle('d-none', !element.checked);
        }
    };

    // Function to copy text from .chat-output of a specific post-ver
    const copyText = (postVersion) => {
        const chatOutput = document.querySelector(`.post-ver-${postVersion} .chat-output`);
        const copyButton = document.querySelector(`.post-ver-${postVersion} .copy`);

        if (chatOutput && copyButton) {
            const textToCopy = chatOutput.innerText;
            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand('copy');
            document.body.removeChild(tempTextArea);

            // Change button text to "Copied!" for 5 seconds
            copyButton.innerText = 'Copied!';
            setTimeout(() => {
                copyButton.innerText = 'Copy';
            }, 5000);
        }
    };

    // Function to handle printing and changing button text to "Printed!" for 5 seconds
    const printContent = (postVersion) => {
        const chatOutput = document.querySelector(`.post-ver-${postVersion} .chat-output`);

        if (chatOutput) {
            // Printing functionality
            const printWindow = window.open('', '_blank');
            printWindow.document.write(chatOutput.innerHTML);
            printWindow.document.close();
            printWindow.print();
            printWindow.close();
        }
    };

    function shareOnFacebook(postVersion) {
        const chatOutput = document.querySelector(`.post-ver-${postVersion} .chat-output`).innerText;
        const encodedChatOutput = encodeURIComponent(chatOutput);
        const shareURL = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodedChatOutput}`;

        // Open a new window with the Facebook sharing dialog
        const popupWidth = 600;
        const popupHeight = 400;
        const leftPosition = (window.screen.width - popupWidth) / 2;
        const topPosition = (window.screen.height - popupHeight) / 2;
        const popupOptions = `toolbar=0,status=0,width=${popupWidth},height=${popupHeight},top=${topPosition},left=${leftPosition}`;

        window.open(shareURL, 'Share on Facebook', popupOptions);
    }




    function shareOnTwitter(postVersion) {
        const chatOutput = document.querySelector(`.post-ver-${postVersion} .chat-output`).innerText;
        // Use Twitter SDK to share content
        // Example:
        window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(chatOutput)}`);
    }





    $(document).ready(function () {

        let postVersion = 1; // Initialize post version counter
        // Inside your form submission handler
        $('#create_<?php echo $project[0]->prompt_question_id; ?>').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form field values
            var formData = $(this).serializeArray(); // Retrieve form data as an array of objects

            // Construct an object from the form data for easy access
            var formValues = {};
            formData.forEach(function (field) {
                formValues[field.name] = field.value;
            });

            // Retrieve the question prompt
            var questionPrompt = "<?php echo $question_prompt; ?>";


            // Replace placeholders in the question prompt
            for (var fieldName in formValues) {
                if (formValues.hasOwnProperty(fieldName)) {
                    var escapedFieldName = fieldName.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'); // Escape special characters

                    var placeholder = '[' + escapedFieldName + ']';
                    // Replace all occurrences of placeholders in the question prompt with form values
                    while (questionPrompt.includes(placeholder)) {
                        questionPrompt = questionPrompt.replace(placeholder, formValues[fieldName]);
                    }
                }
            }


            if (questionPrompt != '') {
                appendGeneratedContent(''); // Or any initial content message
                generate(questionPrompt);
            }



        });



        // Function to append a new post-ver div with generated content
        const appendGeneratedContent = (content) => {
            const chatContainer = document.getElementById('chat-container');

            // Create a new div element for the current post version
            const newDiv = document.createElement('div');
            newDiv.classList.add(`post-ver-${postVersion}`, 'mb-3');
            newDiv.innerHTML = `
        <div class="post-ver-inner mb-3">
            <h6 class="postTitle m-0 mb-3">
                Post Version ${postVersion}
                <div class="togBox">
                    <label class="toggleSwitch">
                        <input type="checkbox" onchange="togglePostVerInner(this, ${postVersion})">
                        <span class="slider"></span>
                    </label>
                </div>
            </h6>
            <p class="chat-output"></p>
        </div>
                        <div class="btnShort d-none">
                            <a href="javascript:void(0)" class="copy" title="Copy to clipboard!" onclick="copyText(${postVersion})">
                                <em class="icon-copy"></em> Copy
                            </a>
                            <a href="javascript:void(0)" class="print" onclick="printContent(${postVersion})">
                                <em class="icon-printer"></em> Print
                            </a>
                            <a href="">
                                <em class="icon-fileDocument"></em> Save
                            </a>
                            <a href="javascript:void(0)" id="facebook" onclick="shareOnFacebook(${postVersion})">
                                <em class="fab fa-facebook-f"></em>
                            </a>
                            <a href="javascript:void(0)" id="instagram">
                                <em class="fab fa-instagram"></em>
                            </a>
                            <a href="javascript:void(0)" id="twitter" onclick="shareOnTwitter(${postVersion})">
                                <em class="fab fa-x-twitter"></em>
                            </a>
                            <a href="javascript:void(0)" id="linkedin">
                                <em class="fab fa-linkedin-in"></em>
                            </a>
                        </div>
    `;

            // Increment the post version for the next iteration
            postVersion++;

            // Append the new div to the chat container
            chatContainer.appendChild(newDiv);
        };



        const API_URL = "https://api.openai.com/v1/chat/completions";
        const API_KEY = "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";

        const generateBtn = document.getElementById("submit-button");
        //const resultText = document.getElementById("chat-output");

        let controller = null; // Store the AbortController instance


        const generate = async (prompt) => {
            // Disable the generate button and enable the stop button
            generateBtn.disabled = true;
            //resultText.innerText = "Generating...";

            let tokenLimit = 800; // Default value

            //resultText.innerText = "Generating...";

            // Create a new AbortController instance
            controller = new AbortController();
            const signal = controller.signal;

            let tokenCount = 0; // Initialize token count to zero

            try {
                // Fetch the response from the OpenAI API with the signal from AbortController
                const messages = [{
                    role: "system",
                    content: "<?php echo $question_title; ?>"
                },
                {
                    role: "user",
                    content: prompt
                }
                ];



                const response = await fetch(API_URL, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        Authorization: `Bearer ${API_KEY}`,
                    },
                    body: JSON.stringify({
                        model: "<?php echo $model_name; ?>",
                        messages,
                        max_tokens: tokenLimit,
                        temperature: 0.2,
                        stream: true,
                        frequency_penalty: 0,
                        presence_penalty: 0.5
                    }),
                    signal, // Pass the signal to the fetch request
                });

                // Read the response as a stream of data
                const reader = response.body.getReader();
                const decoder = new TextDecoder("utf-8");
                //resultText.innerText = "";

                while (true) {
                    const {
                        done,
                        value
                    } = await reader.read();
                    if (done) {
                        break;
                    }
                    // Massage and parse the chunk of data
                    const chunk = decoder.decode(value);
                    const lines = chunk.split("\n");
                    const parsedLines = lines
                        .map((line) => line.replace(/^data: /, "").trim()) // Remove the "data: " prefix
                        .filter((line) => line !== "" && line !== "[DONE]") // Remove empty lines and "[DONE]"
                        .map((line) => JSON.parse(line)); // Parse the JSON string

                    for (const parsedLine of parsedLines) {
                        const {
                            choices
                        } = parsedLine;
                        const {
                            delta
                        } = choices[0];
                        const {
                            content
                        } = delta;
                        // Update the UI with the new content
                        if (content) {
                            const convertedContent = content.replace(/"/g, '').replace(/\n\n+/g, '<br/><br/>').replace(/\n/g, '<br/>');

                            // Update the existing post-ver div with the generated content
                            updateGeneratedContent(convertedContent);

                            // Increment the token count based on the generated content
                            tokenCount += content.split(' ').length; // Assuming tokens are space-separated
                        }

                    }
                }
            } catch (error) {
                // Handle fetch request errors
                if (signal.aborted) {
                    updateGeneratedContent("Request aborted.");
                } else {
                    updateGeneratedContent("Error occurred while generating.");
                }
            } finally {
                // Enable the generate button and disable the stop button
                generateBtn.disabled = false;
                controller = null; // Reset the AbortController instance
            }
        };

        // Function to update the existing post-ver div with generated content
        const updateGeneratedContent = (content) => {
            // Select the latest post-ver div (created in the previous form submission)
            const latestPostVerDiv = document.querySelector(`.post-ver-${postVersion - 1} .chat-output`);

            // Update the content of the latest post-ver div with the new generated content
            if (latestPostVerDiv) {
                latestPostVerDiv.innerHTML += content;
            }
        };


    });

</script>

<script>
      $(document).ready(function () {
  const url = "https://api.openai.com/v1/images/generations";
  const uploadedImage = document.getElementById("uploadedImage");
  const imageDiv = document.getElementById("generated_image");

  let imageSizes = "512"; // Set the default image size to 512

  $('#post_image').on('keydown', function(event) {
      if (event.key === 'Enter') {
          event.preventDefault(); // Prevent default form submission behavior

          const inputText = $(this).val().trim();
          if (inputText !== "") {
              generateImage(inputText);
          }
      }
  });

  function generateImage(inputText) {
      const apiKey = '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';
      if (apiKey === "") {
          alert("Please enter your OpenAI API key");
          return;
      }

      const data = {
          prompt: inputText,
          n: 1, // Generating only 1 image
          size: `${imageSizes}x${imageSizes}`,
      };

      fetch(url, {
          method: "POST",
          headers: {
              "Content-Type": "application/json",
              Authorization: "Bearer " + apiKey,
          },
          body: JSON.stringify(data),
      })
          .then((res) => res.json())
          .then((data) => {
              const generatedImageUrl = data.data[0].url;
              // Update the uploaded image src with the generated image URL
              uploadedImage.src = generatedImageUrl;
              imageDiv.innerHTML = `<img src="${generatedImageUrl}" id="uploadedImage" alt="Generated Image">`;
          })
          .catch((err) => {
              console.log(err);
              alert("Something went wrong. Please try again.");
          });
  }
  });
</script>

<script>
   $(document).ready(function() {
    // Handling file input change event
    $('#uploadInput').on('change', function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            // Set the src attribute of the image to the uploaded image data
            $('#uploadedImage').attr('src', e.target.result);
        };

        if (file) {
            // Read the uploaded file as a data URL
            reader.readAsDataURL(file);
        }
    });
});
</script>
</body>
</html>