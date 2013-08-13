<?php 

// Init vars
$LOCAL_ROOT         = "/var/www/web/";
$LOCAL_REPO_NAME    = "auto-update";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:yank1609/auto-update.git";
$DESIRED_BRANCH     = "origin master";

// Delete local repo if it exists

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo shell_exec("cd {$LOCAL_REPO} && git pull {$DESIRED_BRANCH}");

die("done " . mktime());

?>
