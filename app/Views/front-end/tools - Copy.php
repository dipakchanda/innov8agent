<?php $pagename = 'tools' ; include 'include/header.php'; ?>

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
<section class="toolOne py-60 pt-0">
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
                            <img src="<?php echo base_url(); ?>front-panel/images/icons/emoji/1.svg" alt="">
                            Choose Your Genius |
                            <small>Transform Every Aspect of Your Real Estate Business</small>
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
                    <div class="col-lg-9 col-md-8">
                        <div class="btnFilter">
                            <a href="<?php echo base_url(); ?>tools" <?php if ($tabactive == 'all') { ?>class="active" <?php } ?>>All Tools</a>
                            <?php foreach ($categories as $category) { ?>
                                <a href="<?php echo base_url(); ?>tools/<?php echo $category->category_id; ?>" <?php if ($tabactive == $category->category_id) { ?>class="active" <?php } ?>><?php echo stripslashes($category->category_name); ?></a>
                            <?php } ?>
                        </div>
                        <div class="toolItems">
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
                        </div>

                        <?php if (count($projects) > 20) { ?>
                            <div class="paginationSec">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <em class="icon-arrowLeft"></em> Previous
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">...</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">9</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">10</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                Next <em class="icon-arrowRight"></em>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

</body>
</html>