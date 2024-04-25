<?php

class __Mustache_f6466b357a4420754acc88b813a9d50e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="col-12 course-prgress-container" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <h6 class="courseprogress mt-0 bold">';
        $value = $context->find('str');
        $buffer .= $this->section9bca97fe5936b790688de8173824716d($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '    <div class="progress progress-rounded mb-4">
';
        $buffer .= $indent . '        <div class="progress-bar bg-green-600" style="width: ';
        $value = $this->resolveValue($context->find('percentage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '%; height: 100%;" role="progressbar">
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $this->resolveValue($context->find('percentage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '% Complete</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <ul class="section-activities-summary">
';
        $value = $context->find('activitylist');
        $buffer .= $this->sectionCa355d908512f74418e100e8a0f1dadb($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9bca97fe5936b790688de8173824716d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' coursecompletionprogress, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' coursecompletionprogress, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa355d908512f74418e100e8a0f1dadb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="item">{{ . }}</li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="item">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
