<?php
class GenerateHandler extends AbstractHandler
{
    protected $components = array(
        'Scaffolding' => array(
            'Normalize and reset' => 'reset.less',
            'Body type and links' => 'scaffolding.less',
            'Grid system' => 'grid.less',
            'Layouts' => 'layouts.less'
        ),
        'Base CSS' => array(
            'Headings, body etc' => 'type.less',
            'Code and pre' => 'code.less',
            'Labels and badges' => 'labels-badges.less',
            'Tables' => 'tables.less',
            'Forms' => 'forms.less',
            'Buttons' => 'buttons.less',
            'Icons' => 'sprites.less'
        ),
        'Components' => array(
            'Buttons, groups, and dropdowns' => 'button-groups.less',
            'Navs, tabs, and pills' => 'navs.less',
            'Navbar' => 'navbar.less',
            'Breadcrumbs' => 'breadcrumbs.less',
            'Pagination' => 'pagination.less',
            'Pager' => 'pager.less',
            'Thumbnails' => 'thumbnails.less',
            'Alerts' => 'alerts.less',
            'Progress bars' => 'progress-bars.less',
            'Hero unit' => 'hero-unit.less',
            'Media component' => 'media.less'
        ),
        'JS Components' => array(
            'Tooltips' => 'tooltips.less',
            'Popovers' => 'popovers.less',
            'Modals' => 'modals.less',
            'Dropdowns' => 'dropdowns.less',
            'Collapse' => 'accordion.less',
            'Carousel' => 'carousel.less'
        ),
        'Miscellaneous' => array(
            'Wells' => 'wells.less',
            'Close icon' => 'close.less',
            'Utilities' => 'utilities.less',
            'Component animations' => 'component-animations.less'
        ),
        'Responsive' => array(
            'Visible/hidden classes' => 'responsive-utilities.less',
            'Narrow tablets and below (&lt;767px)' => 'responsive-767px-max.less',
            'Tablets to desktops (768&ndash;979px)' => 'responsive-768px-979px.less',
            'Large desktops (&gt;1200px)' => 'responsive-1200px-min.less',
            'Responsive navbar' => 'responsive-navbar.less'
        )
    );
    protected $jQueryPlugins = array(
        'Transitions <small class="muted">(required for any animation)</small>' => '',
        'Modals' => '',
        'Dropdowns' => '',
        'Scrollspy' => '',
        'Togglable tabs' => '',
        'Tooltips' => 'bootstrap-tooltip.js',
        'Popovers <small class="muted">(requires Tooltips)</small>' => 'bootstrap-popover.js',
        'Affix' => '',
        'Alert messages' => '',
        'Buttons' => '',
        'Collapse' => '',
        'Carousel' => '',
        'Typeahead' => ''
    );
    protected $variables = array(
        'Scaffolding' => array(
            '@bodyBackground' => '@white'
        )
    );
    
    public function get()
    {
        $this->render('themes/generate', array(
            'title_for_layout' => 'Generate Theme',
            'components' => $this->components,
            'jQueryPlugins' => $this->jQueryPlugins,
            'variables' => $this->variables
        ));
    }
}