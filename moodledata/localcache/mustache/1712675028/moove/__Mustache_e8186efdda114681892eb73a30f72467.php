<?php

class __Mustache_e8186efdda114681892eb73a30f72467 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<li class="tile';
        $value = $context->find('hidden');
        $buffer .= $this->section7aa9d29047685f43b691d6a07b1afcea($context, $indent, $value);
        $value = $context->find('restricted');
        $buffer .= $this->sectionE2bb66f5487b7617b8c51f2a5b45d501($context, $indent, $value);
        $value = $context->find('isactive');
        $buffer .= $this->section928b6ff338b0eb6eaf854e3f17360ba9($context, $indent, $value);
        $value = $context->find('userclickable');
        $buffer .= $this->sectionCb55db809f17c40a745ac914e4c0d26a($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    id="tile-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-true-sectionid="';
        $value = $this->resolveValue($context->find('secid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" tabindex="2" aria-role="button"';
        $value = $context->find('hastilephoto');
        $buffer .= $this->section23076bee0d5ba21085d8152deab9a01a($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <a class="tile-link"';
        $value = $context->find('userclickable');
        $buffer .= $this->section53a35190562f5204e7714b0a2e5bddb1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '       data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="sectionlink-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="tile-content" id="tilecontent-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '            <div class="tile-top" id="tileTop-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                <div class="tileiconcontainer" id="tileicon_';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                    ';
            $value = $context->find('isediting');
            $buffer .= $this->section2771f295cae59d723532e6fdc6d1c544($context, $indent, $value);
            $buffer .= '>
';
            if ($partial = $this->mustache->loadPartial('format_tiles/tileicon')) {
                $buffer .= $partial->renderInternal($context, $indent . '                    ');
            }
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="tiletopright pull-right" id="tiletopright-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" aria-hidden="true">
';
            $value = $context->find('hidden');
            $buffer .= $this->sectionFf23cda8d2714c169f16615d5e5d092d($context, $indent, $value);
            $buffer .= $indent . '                    ';
            $value = $context->find('restricted');
            $buffer .= $this->section4dbb5478a23a8760efd0d2529cbff37d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    ';
            $value = $context->find('progress');
            $buffer .= $this->section6eb0d62c1bb37b05cb0de1f831e74989($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="tile-text" id="tileText-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                ';
            $value = $context->find('ismobile');
            if (empty($value)) {
                
                $value = $context->find('activity_summary');
                $buffer .= $this->section5084fb30a3aaf77d490e64f6de472bb6($context, $indent, $value);
            }
            $buffer .= '>
';
            $buffer .= $indent . '                <span class="tile-textinner';
            $value = $this->resolveValue($context->find('titleclass'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" id="tileTextin-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '                  ';
            $value = $context->find('title');
            $buffer .= $this->section2af72651b67e0cfebab37ff84b859898($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </span>
';
            $value = $context->find('availabilitymessage');
            $buffer .= $this->section34b3c627994fcbef920aa5002210e6d2($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('hastilephoto');
        $buffer .= $this->section6c07f3229f9be3b6d5fe61778f7a3840($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        $value = $context->find('usingjsnav');
        $buffer .= $this->section17957b7bab327aa2a9340dc71b7c8c90($context, $indent, $value);
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section7aa9d29047685f43b691d6a07b1afcea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-hidden';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tile-hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2bb66f5487b7617b8c51f2a5b45d501(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-restricted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tile-restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section928b6ff338b0eb6eaf854e3f17360ba9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' current';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' current';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb55db809f17c40a745ac914e4c0d26a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-clickable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tile-clickable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23076bee0d5ba21085d8152deab9a01a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{phototileinlinestyle}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('phototileinlinestyle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53a35190562f5204e7714b0a2e5bddb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&section={{tileid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&section=';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa52e14d9db90ec37b236f39dc78c82e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewicon, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'picknewicon, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF32f5bbcf6805d6f2767abe2a98bfa4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewiconphoto, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'picknewiconphoto, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section366205ecbdff702f963ebbfc675cc9be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}picknewiconphoto, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionF32f5bbcf6805d6f2767abe2a98bfa4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2771f295cae59d723532e6fdc6d1c544(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" data-placement="left"
                     data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-toggle="tooltip" data-placement="left"
';
                $buffer .= $indent . '                     data-original-title="';
                $value = $context->find('allowphototiles');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa52e14d9db90ec37b236f39dc78c82e($context, $indent, $value);
                }
                $value = $context->find('allowphototiles');
                $buffer .= $this->section366205ecbdff702f963ebbfc675cc9be($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD44735bb46c7c26ca90a9ba3bacaa65e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden, format_tiles';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hidden, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9b2a6d9f947663ad2852194c9d9704b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'eye-slash, format_tiles, {{#str}}hidden, format_tiles{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'eye-slash, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionD44735bb46c7c26ca90a9ba3bacaa65e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf23cda8d2714c169f16615d5e5d092d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}eye-slash, format_tiles, {{#str}}hidden, format_tiles{{/str}}{{/pix}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC9b2a6d9f947663ad2852194c9d9704b($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA660a93413b0d2d8a474fd11d6a19275(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0530b72d4485ad5ac5e1bad519ab725(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lock, format_tiles, {{#str}}restricted{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lock, format_tiles, ';
                $value = $context->find('str');
                $buffer .= $this->sectionA660a93413b0d2d8a474fd11d6a19275($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4dbb5478a23a8760efd0d2529cbff37d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^progress}}
                        {{#pix}}lock, format_tiles, {{#str}}restricted{{/str}}{{/pix}}
                    {{/progress}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('progress');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '                        ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionD0530b72d4485ad5ac5e1bad519ab725($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6eb0d62c1bb37b05cb0de1f831e74989(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^hidden}}
                        {{> format_tiles/progress}}
                    {{/hidden}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hidden');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                    $buffer .= $indent . '                    ';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17efc94e5772ecd6a31fd3234c8f1a09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    data-toggle="tooltip" data-html="true" data-original-title="{{activity_summary}}"
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                    data-toggle="tooltip" data-html="true" data-original-title="';
                $value = $this->resolveValue($context->find('activity_summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5084fb30a3aaf77d490e64f6de472bb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#usetooltips}}
                    data-toggle="tooltip" data-html="true" data-original-title="{{activity_summary}}"
                {{/usetooltips}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('usetooltips');
                $buffer .= $this->section17efc94e5772ecd6a31fd3234c8f1a09($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2af72651b67e0cfebab37ff84b859898(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3>{{{title}}}</h3>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34b3c627994fcbef920aa5002210e6d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>format_tiles/availability_info}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE801f9ab0cae8dff89fc23a745c48b18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>format_tiles/availability_info}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2ad21c668f969a9bc78e68df9db34c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> format_tiles/progress}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section357ac4bfbeec91cae42340ebef3e6f50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#progress}}
                        {{> format_tiles/progress}}
                    {{/progress}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('progress');
                $buffer .= $this->sectionC2ad21c668f969a9bc78e68df9db34c1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2413dc4fe746b631df6fa4d79f3b2ed2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    data-original-title="{{activity_summary}}" data-toggle="tooltip" data-html="true"
                 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                    data-original-title="';
                $value = $this->resolveValue($context->find('activity_summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="tooltip" data-html="true"
';
                $buffer .= $indent . '                 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9fa955078e5622aabb1e9ea7263c573(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^ismobile}}{{#usetooltips}}
                    data-original-title="{{activity_summary}}" data-toggle="tooltip" data-html="true"
                 {{/usetooltips}}{{/ismobile}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('ismobile');
                if (empty($value)) {
                    
                    $value = $context->find('usetooltips');
                    $buffer .= $this->section2413dc4fe746b631df6fa4d79f3b2ed2($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4acc23b7c1006bad6cbf48e2496d9fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        data-original-title="{{activity_summary}}" data-toggle="tooltip" data-html="true"
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                        data-original-title="';
                $value = $this->resolveValue($context->find('activity_summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="tooltip" data-html="true"
';
                $buffer .= $indent . '                    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1908bdc674601383e5e1ab63d8e76f23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^ismobile}}{{#usetooltips}}
                        data-original-title="{{activity_summary}}" data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}{{/ismobile}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('ismobile');
                if (empty($value)) {
                    
                    $value = $context->find('usetooltips');
                    $buffer .= $this->sectionB4acc23b7c1006bad6cbf48e2496d9fd($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c07f3229f9be3b6d5fe61778f7a3840(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#availabilitymessage}}
                {{>format_tiles/availability_info}}
            {{/availabilitymessage}}
                {{#showprogresssphototiles}}
                    {{#progress}}
                        {{> format_tiles/progress}}
                    {{/progress}}
                {{/showprogresssphototiles}}

            <div id="tileText-{{tileid}}"
                 {{#activity_summary}}{{^ismobile}}{{#usetooltips}}
                    data-original-title="{{activity_summary}}" data-toggle="tooltip" data-html="true"
                 {{/usetooltips}}{{/ismobile}}{{/activity_summary}}>
            <span class="photo-tile-text{{titleclass}}" id="tileTextin-{{tileid}}">
                {{#title}}<h3>{{{title}}}</h3>{{/title}}
            </span>
                <div class="tile-text"
                    {{#activity_summary}}{{^ismobile}}{{#usetooltips}}
                        data-original-title="{{activity_summary}}" data-toggle="tooltip" data-html="true"
                    {{/usetooltips}}{{/ismobile}}{{/activity_summary}}
                >
                {{! This ensures that the bottom section of the tile shows the activity summary on hover, too}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('availabilitymessage');
                $buffer .= $this->sectionE801f9ab0cae8dff89fc23a745c48b18($context, $indent, $value);
                $value = $context->find('showprogresssphototiles');
                $buffer .= $this->section357ac4bfbeec91cae42340ebef3e6f50($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div id="tileText-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 ';
                $value = $context->find('activity_summary');
                $buffer .= $this->sectionA9fa955078e5622aabb1e9ea7263c573($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            <span class="photo-tile-text';
                $value = $this->resolveValue($context->find('titleclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="tileTextin-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('title');
                $buffer .= $this->section2af72651b67e0cfebab37ff84b859898($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '                <div class="tile-text"
';
                $buffer .= $indent . '                    ';
                $value = $context->find('activity_summary');
                $buffer .= $this->section1908bdc674601383e5e1ab63d8e76f23($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17957b7bab327aa2a9340dc71b7c8c90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! This is added as empty for now - JS will populate and de-populate as necessary and add image to it using template.}}
        <span class="tile-loading-icon" id="loading-icon-{{tileid}}" style="display: none;"></span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="tile-loading-icon" id="loading-icon-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="display: none;"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
