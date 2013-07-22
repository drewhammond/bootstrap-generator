        <header class="page-header">
          <h1>Generate Theme</h1>
        </header>
        <form action="" method="post" id="customize">
          <fieldset id="components">
            <header class="clearfix">
              <h2 class="pull-left">Components</h2>
              <a class="pull-right btn btn-small btn-toggle" href="#">Toggle all</a>
            </header>
            <div class="row">
              <div class="span3">
<?php foreach ($components as $heading => $items): ?>
<?php if (in_array($heading, array('Components', 'JS Components', 'Miscellaneous'))): ?>
              </div>
              <div class="span3">
<?php endif; ?>
                <h3><?php echo $heading; ?></h3>
<?php foreach ($items as $name => $filename): ?>
                <label class="checkbox">
                  <input type="checkbox" name="component[]" value="<?php echo $filename; ?>" checked="checked" />
                  <?php echo $name.PHP_EOL; ?>
                </label>
<?php endforeach; ?>
<?php endforeach; ?>
              </div>
            </div>
          </fieldset>
          <fieldset id="jquery-plugins">
            <header class="clearfix">
              <h2 class="pull-left">jQuery plugins</h2>
              <a class="pull-right btn btn-small btn-toggle" href="#">Toggle all</a>
            </header>
            <div class="row">
              <div class="span3 pull-right muted">
                <h4>Heads up!</h4>
                <p>All checked plugins will be compiled into a single file, <strong>bootstrap.js</strong>. All plugins require the latest version of jQuery to be included.</p>
              </div>
              <div class="span9 pull-left">
                <div class="row">
<?php $i = 0; foreach ($jQueryPlugins as $name => $filename): ?>
                  <div class="span3"<?php if (($i % 3) === 0) echo ' style="clear:left;"'; ?>>
                    <label class="checkbox" for="<?php echo str_replace('.js', '', $filename); ?>">
                      <input type="checkbox" name="plugins[]" value="<?php echo $filename; ?>" id="<?php echo str_replace('.js', '', $filename); ?>" checked="checked" />
                      <?php echo $name.PHP_EOL; ?>
                    </label>
                  </div>
<?php $i++; endforeach; ?>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset id="variables">
            <h2>Variables</h2>
<?php foreach ($variables as $heading => $vars): ?>
            <h3><?php echo $heading; ?></h3>
<?php foreach ($vars as $name => $default): ?>
            <div class="control-group">
              <label class="control-label" for="<?php echo str_replace('@', '', $name); ?>"><?php echo $name; ?></label>
              <div class="controls">
                <input type="text" name="vars[<?php echo str_replace('@', '', $name); ?>]" id="<?php echo str_replace('@', '', $name); ?>" placeholder="<?php echo $default; ?>" />
              </div>
            </div>
<?php endforeach; ?>
<?php endforeach; ?>
          </fieldset>
          <fieldset id="download">
            <h2>Download</h2>
            <input type="submit" name="download" value="Customize &amp; Download" class="btn btn-block btn-mega btn-primary" />
            <div class="muted">
              <h4>What&rsquo;s included?</h4>
              <p>Downloads include compiled CSS, compiled and minified CSS, and compiled jQuery plugins; all nicely packed up into a zipball for your convenience.</p>
            </div>
          </fieldset>
        </form>
