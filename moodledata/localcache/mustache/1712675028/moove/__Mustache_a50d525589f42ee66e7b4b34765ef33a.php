<?php

class __Mustache_a50d525589f42ee66e7b4b34765ef33a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.read-more-state ~ .read-more-trigger:before {
';
        $buffer .= $indent . '    content: \'';
        $value = $context->find('str');
        $buffer .= $this->sectionBf6c39c32b23af36bbbe9f12209ea1fc($context, $indent, $value);
        $buffer .= '\';
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.read-more-state:checked ~ .read-more-trigger:before {
';
        $buffer .= $indent . '    content: \'';
        $value = $context->find('str');
        $buffer .= $this->section11a97fa9580fa98c066ba6a8461d9f2f($context, $indent, $value);
        $buffer .= '\';
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $value = $context->find('editing');
        $buffer .= $this->section4b9d6ca56694ffc84e3a78e52e6839a9($context, $indent, $value);
        $value = $context->find('editing');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div id="card-container" class="remui-format-card all-section-format theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= ' row">
';
            $buffer .= $indent . '        <ul class="sections row">
';
            $value = $context->find('generalsection');
            $buffer .= $this->sectionEbb6e418584189c350c197c8f6d46ecd($context, $indent, $value);
            $value = $context->find('sections');
            $buffer .= $this->section06de0d239bb464924c6c033beafb92cb($context, $indent, $value);
            $buffer .= $indent . '        </ul>
';
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function sectionBf6c39c32b23af36bbbe9f12209ea1fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showfullsummary, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showfullsummary, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11a97fa9580fa98c066ba6a8461d9f2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showless, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showless, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5890fb739e398aa3119a4a6f897df389(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> format_remuiformat/card_general_section_edit }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_general_section_edit')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06de0d239bb464924c6c033beafb92cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> format_remuiformat/card_section_summary }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_section_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b9d6ca56694ffc84e3a78e52e6839a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="card-editing-container" class="remui-format-card all-section-format theme-{{theme}} row">
        {{! Display General Section }}
        <ul class="sections row">
            {{#generalsection}}
                {{> format_remuiformat/card_general_section_edit }}
            {{/generalsection}}
            {{! Display Remaining Section }}
            {{#sections}}
                {{> format_remuiformat/card_section_summary }}
            {{/sections}}
            {{{ addsection }}}
        </ul>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="card-editing-container" class="remui-format-card all-section-format theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' row">
';
                $buffer .= $indent . '        <ul class="sections row">
';
                $value = $context->find('generalsection');
                $buffer .= $this->section5890fb739e398aa3119a4a6f897df389($context, $indent, $value);
                $value = $context->find('sections');
                $buffer .= $this->section06de0d239bb464924c6c033beafb92cb($context, $indent, $value);
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbb6e418584189c350c197c8f6d46ecd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> format_remuiformat/card_general_section }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_general_section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
