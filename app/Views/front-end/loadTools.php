<div class="row gap-y1">
<?php if (count($projects) > 0) { ?>
	<?php
	foreach ($projects as $project) {
		if ($project->question_icon != '' && file_exists('uploads/questionicon/' . $project->question_icon)) {
			$question_icon = base_url() . 'uploads/questionicon/' . $project->question_icon;
		} else {
			$question_icon = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
		}
	?>
		<div class="col-md-4">
			<div class="toolCardOne">
				<div class="details">
					<h6>
						<img src="<?php echo $question_icon; ?>" alt="<?php echo stripslashes($project->question_title); ?>">
						<?php echo stripslashes($project->question_title); ?>
					</h6>
					<p>
						<?php
						$maxLength = 50;
						$questionDesc = stripslashes($project->question_desc);

						if (strlen($questionDesc) > $maxLength) {
							$questionDesc = substr($questionDesc, 0, $maxLength) . '...';
						}

						echo $questionDesc;
						?>
					</p>
				</div>
				<div class="views">
					<a href="<?php echo base_url(); ?>tools-details/<?php echo $project->prompt_question_id; ?>">View Genius</a>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>
	<div class="col-md-4">
		<span class="error">No record found</span>
	</div>
<?php } ?>
</div>