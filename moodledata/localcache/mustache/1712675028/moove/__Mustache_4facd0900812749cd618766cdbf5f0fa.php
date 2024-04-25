<?php

class __Mustache_4facd0900812749cd618766cdbf5f0fa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('addsection');
        $buffer .= $this->sectionD3705f0eebfd064ceb9e4e5121320e16($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('addsection');
        if (empty($value)) {
            
            $buffer .= $indent . '<li class="col-lg-4 col-md-6 col-sm-6 d-inline-flex section" id="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" aria-labelledby="section-';
            $value = $this->resolveValue($context->find('index'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' .content .sectionname">
';
            $buffer .= $indent . '    <div class="single-card ';
            $value = $this->resolveValue($context->find('remuinewthemecolor'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' ';
            $value = $context->find('sectionfirstimage');
            $buffer .= $this->section02bb0d127d75132b515e5847739874fc($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '        style="background: linear-gradient(';
            $value = $this->resolveValue($context->find('remuidefaultsectionoverlay'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ', ';
            $value = $this->resolveValue($context->find('remuidefaultsectionoverlay'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '), ';
            $value = $this->resolveValue($context->find('sectionfirstimage'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ';
';
            $buffer .= $indent . '                background-repeat: no-repeat;
';
            $buffer .= $indent . '                background-size: cover;";>
';
            $buffer .= $indent . '        ';
            $value = $context->find('highlighted');
            $buffer .= $this->sectionF1d539161390b33188d467e44eac7c52($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        <div class="left side float-left mt-0">
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('leftside'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class=\'right side float-right mt-0\'>
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('addnewsection'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('optionmenu'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="content pb-10 pb-2">
';
            $buffer .= $indent . '            <div class="summary">
';
            $buffer .= $indent . '            </div>
';
            $value = $context->find('addnewsection');
            $buffer .= $this->section3b7f5dff919bedfbf8761b783e3653f3($context, $indent, $value);
            $value = $context->find('addnewsection');
            if (empty($value)) {
                
                $buffer .= $indent . '                <div class="section-header">
';
                $value = $context->find('hidden');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <a href="';
                    $value = $this->resolveValue($context->find('singlepageurl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">
';
                }
                $buffer .= $indent . '                        <h2 class="sectionname">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $value = $context->find('hidden');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        </a>
';
                }
                $buffer .= $indent . '                </div>
';
            }
            $buffer .= $indent . '            <div class="wdm-section-summary ';
            $value = $context->find('hidden');
            $buffer .= $this->sectionF2b9acb9a95f8abcb628d6b23f8157ed($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('summary'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="section-activities-summary">
';
            $value = $context->find('activityinfo');
            $buffer .= $this->section2a2d442f6dc70161004224d2998605ed($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('hiddenmessage'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $value = $context->find('editsectionurl');
            $buffer .= $this->section30f1975225076373ae7640a42a1bfcc0($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="section-action-container card-bottom d-flex ';
            $value = $context->find('hidden');
            if (empty($value)) {
                
                $buffer .= 'text-primary';
            }
            $value = $context->find('hidden');
            $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
            $buffer .= '">
';
            $value = $context->find('progressinfo');
            $buffer .= $this->section84138e506eb5c962ae378c4188113b4b($context, $indent, $value);
            $buffer .= $indent . '            <div class="text-right progress-text">
';
            $value = $context->find('progressinfo');
            $buffer .= $this->sectionF898395426f6be45aa9d83ae696d1b56($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</li>
';
        }

        return $buffer;
    }

    private function section57742138bdef30be2374d7f833a76e1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('removeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('removeurlclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('removeicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('strremovesection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8821f813b283b300fd52213603d2a29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{addurl}}}" class="{{addurlclass}}">{{{addicon}}} {{{straddsection}}}</a>

            {{#strremovesection}}
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            {{/strremovesection}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('addurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('addurlclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('addicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('straddsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '
';
                $value = $context->find('strremovesection');
                $buffer .= $this->section57742138bdef30be2374d7f833a76e1e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3705f0eebfd064ceb9e4e5121320e16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li id="{{divid}}" class="col-lg-4 col-md-6 col-sm-6 d-inline-flex single-card-container">
    <div class="single-card d-flex align-items-center">
        {{#numsections}}
            <a href="{{{addurl}}}" class="{{addurlclass}}">{{{addicon}}} {{{straddsection}}}</a>

            {{#strremovesection}}
            <a href="{{{removeurl}}}" class="{{removeurlclass}}">{{{removeicon}}} {{{strremovesection}}}</a>
            {{/strremovesection}}
        {{/numsections}}

        {{^numsections}}
            <a href="{{{url}}}" data-add-sections="{{{straddsections}}}">{{{icon}}} {{{straddsections}}}</a>
        {{/numsections}}
    </div>
</li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<li id="';
                $value = $this->resolveValue($context->find('divid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="col-lg-4 col-md-6 col-sm-6 d-inline-flex single-card-container">
';
                $buffer .= $indent . '    <div class="single-card d-flex align-items-center">
';
                $value = $context->find('numsections');
                $buffer .= $this->sectionE8821f813b283b300fd52213603d2a29($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('numsections');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" data-add-sections="';
                    $value = $this->resolveValue($context->find('straddsections'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('straddsections'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02bb0d127d75132b515e5847739874fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sectionfirstimage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sectionfirstimage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1d539161390b33188d467e44eac7c52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="highlight text-primary"></div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="highlight text-primary"></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b7f5dff919bedfbf8761b783e3653f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h2 class="sectionname">{{{ title }}}</h2>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h2 class="sectionname">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2b9acb9a95f8abcb628d6b23f8157ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summary-muted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summary-muted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84abb2ca392375a862f0cffdc8fe21b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-muted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-muted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a2d442f6dc70161004224d2998605ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="item {{#hidden}}text-muted{{/hidden}}">{{ . }}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="item ';
                $value = $context->find('hidden');
                $buffer .= $this->section84abb2ca392375a862f0cffdc8fe21b3($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30f1975225076373ae7640a42a1bfcc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="text-muted" href="{{ editsectionurl }}"><span><i class="fa fa-cog font-size-20 mb-5" aria-hidden="true"></i></span></a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="text-muted" href="';
                $value = $this->resolveValue($context->find('editsectionurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><span><i class="fa fa-cog font-size-20 mb-5" aria-hidden="true"></i></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84138e506eb5c962ae378c4188113b4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="progress progress-xs bg-grey-300 m-b-1">
                    <div class="progress-bar bg-green-600" style="width: {{ percentage }}%;" role="progressbar">
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="progress progress-xs bg-grey-300 m-b-1">
';
                $buffer .= $indent . '                    <div class="progress-bar bg-green-600" style="width: ';
                $value = $this->resolveValue($context->find('percentage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%;" role="progressbar">
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF898395426f6be45aa9d83ae696d1b56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ progress }}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
