<?php

class __Mustache_340c738ec197fe376f08a6cece158bee extends Mustache_Template
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
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="section col-12">
';
        $buffer .= $indent . '    <div class="general-section">
';
        $buffer .= $indent . '        <div class="section-details">
';
        $buffer .= $indent . '            <div class="coursedetails">
';
        $buffer .= $indent . '                <div class="details">
';
        $value = $context->find('coursemainimage');
        $buffer .= $this->sectionA999a3f312ae878bced6238f88105ac2($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('format_remuiformat/course_progress')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $value = $context->find('resumeactivityurl');
        $buffer .= $this->section70688422209a84ea8f9e83804cfa30e7($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="generaldetails content">
';
        $buffer .= $indent . '                <h2 class="section-title pt-0 p-t-0">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h2>
';
        $buffer .= $indent . '                <div class=\'generalsectioninfo\'>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('availability'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('fullsummary');
        $buffer .= $this->section2081c4f276292083f2c6a2480968154f($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('activityexists');
        $buffer .= $this->sectionFfb359e805f0e0fec9956c22c66ece84($context, $indent, $value);
        $buffer .= $indent . '        <div class="text-center showactivitywrapper">
';
        $buffer .= $indent . '            <span class="showactivity text-primary show">
';
        $buffer .= $indent . '                <i class="fa fa-angle-down" aria-hidden="true"></i>
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>  
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function sectionA999a3f312ae878bced6238f88105ac2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-12 coursemainimagediv text-right d-md-block mb-4">
                            <div class="coursemainimage" style="background-image: url(\'{{coursemainimage}}\');"></div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="col-12 coursemainimagediv text-right d-md-block mb-4">
';
                $buffer .= $indent . '                            <div class="coursemainimage" style="background-image: url(\'';
                $value = $this->resolveValue($context->find('coursemainimage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');"></div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b07f35cef02e4b80c9624f699e8b31f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' resumetoactivity, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' resumetoactivity, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70688422209a84ea8f9e83804cfa30e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-12 text-center mt-4">
                            <a class="btn btn-primary btn-block bold" href="{{{ resumeactivityurl }}}" role="button">{{#str}} resumetoactivity, format_remuiformat{{/str}}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="col-12 text-center mt-4">
';
                $buffer .= $indent . '                            <a class="btn btn-primary btn-block bold" href="';
                $value = $this->resolveValue($context->find('resumeactivityurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" role="button">';
                $value = $context->find('str');
                $buffer .= $this->section8b07f35cef02e4b80c9624f699e8b31f($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2081c4f276292083f2c6a2480968154f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <input type="checkbox" class="read-more-state" id="read-more-summary" />
                        <div class="read-more-target">{{{ fullsummary }}}</div>
                        <div class="fadeout-summary"></div>
                        <label for="read-more-summary" class=" text-primary small read-more-trigger"></label>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <input type="checkbox" class="read-more-state" id="read-more-summary" />
';
                $buffer .= $indent . '                        <div class="read-more-target">';
                $value = $this->resolveValue($context->find('fullsummary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        <div class="fadeout-summary"></div>
';
                $buffer .= $indent . '                        <label for="read-more-summary" class=" text-primary small read-more-trigger"></label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section064f86973ee67644bf308ef4ba88d88b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' generalactivities, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' generalactivities, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB112a79f48b18372a6acdf0e308ac48f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{{leftside}}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('leftside'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section097f83a7c702875e02f2bdea51159f32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="activity justify-content-center list-unstyled {{{modulename}}} modtype_{{{modulename}}}" id="module-{{id}}">
                        <div class="generalsecactivitiescontent w-100">
                            {{#editing}}
                                {{{leftside}}}
                            {{/editing}}
                            {{! <div> }}
                                <div class="activityinstance p-0 d-inline-block">
                                    {{{title}}}
                                </div>
                                <div class="actions">
                                    {{{completion}}}
                                </div>
                                <div class="contentafterlink">
                                    {{{summary}}}
                                </div>
                                {{{availstatus}}}
                            {{! </div> }}
                        </div>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="activity justify-content-center list-unstyled ';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="generalsecactivitiescontent w-100">
';
                $value = $context->find('editing');
                $buffer .= $this->sectionB112a79f48b18372a6acdf0e308ac48f($context, $indent, $value);
                $buffer .= $indent . '                                <div class="activityinstance p-0 d-inline-block">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="actions">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="contentafterlink">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('availstatus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfb359e805f0e0fec9956c22c66ece84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h4 class="activitieshead">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            <ul class="general-section-activities justify-content-start text-center">
                {{#activities}}
                    <li class="activity justify-content-center list-unstyled {{{modulename}}} modtype_{{{modulename}}}" id="module-{{id}}">
                        <div class="generalsecactivitiescontent w-100">
                            {{#editing}}
                                {{{leftside}}}
                            {{/editing}}
                            {{! <div> }}
                                <div class="activityinstance p-0 d-inline-block">
                                    {{{title}}}
                                </div>
                                <div class="actions">
                                    {{{completion}}}
                                </div>
                                <div class="contentafterlink">
                                    {{{summary}}}
                                </div>
                                {{{availstatus}}}
                            {{! </div> }}
                        </div>
                    </li>
                {{/activities}}
            </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h4 class="activitieshead">';
                $value = $context->find('str');
                $buffer .= $this->section064f86973ee67644bf308ef4ba88d88b($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            <ul class="general-section-activities justify-content-start text-center">
';
                $value = $context->find('activities');
                $buffer .= $this->section097f83a7c702875e02f2bdea51159f32($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
