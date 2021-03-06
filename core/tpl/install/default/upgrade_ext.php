<?php $cfg = array(
    'sub_title'     => $this->lang['mod']['page']['ext'],
    'mod_help'      => 'upgrade',
    'act_help'      => 'ext',
    'pathInclude'   => BG_PATH_TPLSYS . 'install' . DS . 'default' . DS . 'include' . DS,
);

include($cfg['pathInclude'] . 'upgrade_head.php');
include($cfg['pathInclude'] . 'ext.php'); ?>

    <hr class="bg-panel-hr">

    <?php if (isset($this->tplData['errCount']) && $this->tplData['errCount'] > 0) { ?>
        <div class="alert alert-danger">
            <span class="glyphicon glyphicon-remove-sign"></span>
            <?php echo $this->lang['mod']['text']['extErr']; ?>
        </div>

        <div class="form-group clearfix">
            <div class="pull-right">
                <div class="form-group">
                    <button class="btn btn-primary" disabled><?php echo $this->lang['mod']['btn']['stepNext']; ?></button>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok-sign"></span>
            <?php echo $this->lang['mod']['text']['extOk']; ?>
        </div>

        <div class="form-group clearfix">
            <div class="pull-left">
                <div class="btn-group">
                    <?php include($cfg['pathInclude'] . 'upgrade_drop.php'); ?>
                    <a href="<?php echo BG_URL_INSTALL; ?>index.php?mod=upgrade&act=dbconfig" class="btn btn-default"><?php echo $this->lang['mod']['btn']['skip']; ?></a>
                </div>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo BG_URL_INSTALL; ?>index.php?mod=upgrade&act=dbconfig"><?php echo $this->lang['mod']['btn']['stepNext']; ?></a>
            </div>
        </div>
    <?php }

include($cfg['pathInclude'] . 'install_foot.php');
include($cfg['pathInclude'] . 'html_foot.php'); ?>