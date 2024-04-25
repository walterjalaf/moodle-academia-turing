<?php

class __Mustache_2b4355c2becff655f825d889f13b41ec extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="section main cards col-lg-12 col-sm-12 mb-25 mb-4 p-10">
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
        $buffer .= $this->section286353676820e60b4a07464f54cebb58($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('format_remuiformat/course_progress')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $value = $context->find('resumeactivityurl');
        $buffer .= $this->section616252202f5e79d394d518f3d6e3c926($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="generaldetails content">
';
        $buffer .= $indent . '                <div class="left side">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('leftsection'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="right side">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('optionmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <h2 class="section-title">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
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
        $buffer .= $this->section91c8865aaffe0831543f9eb35ea52a66($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <a class="text-muted" href="';
        $value = $this->resolveValue($context->find('editsetionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"><span><i class="fa fa-cog font-size-20" aria-hidden="true"></i></span></a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('activityexists');
        $buffer .= $this->section2d765f4d6653b12840e3f5ea50c9e2ed($context, $indent, $value);
        $buffer .= $indent . '        <div class="content">
';
        $buffer .= $indent . '            <div class="summary"></div>
';
        $buffer .= $indent . '            <ul class="img-text section general-section-activities justify-content-start text-center yui3-dd-drop" data-draggroups="resource">
';
        $value = $context->find('activities');
        $buffer .= $this->sectionEc3b1723faa9e8d85d448f96000edef1($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
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
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('addnewactivity'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section286353676820e60b4a07464f54cebb58(Mustache_Context $context, $indent, $value)
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

    private function section616252202f5e79d394d518f3d6e3c926(Mustache_Context $context, $indent, $value)
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

    private function section91c8865aaffe0831543f9eb35ea52a66(Mustache_Context $context, $indent, $value)
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

    private function section2d765f4d6653b12840e3f5ea50c9e2ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h4 class="activitieshead">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f2d0dd50f47ff116e731c3cedcc2d95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' moveresource, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' moveresource, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc3b1723faa9e8d85d448f96000edef1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="activity {{{modulename}}} modtype_{{{modulename}}} justify-content-center list-unstyled yui3-dd-drop" id="module-{{id}}" data-draggroups="resource">
                        <div>
                            <div class="activityinstance p-0 d-inline-block">
                                {{{title}}}
                                <span class="pl-10"><span class="editing_move moodle-core-dragdrop-draghandle" title="{{#str}} moveresource, format_remuiformat {{/str}}" tabindex="0" data-draggroups="resource" role="button" data-sectionreturn="0"><i class="icon fa fa-arrows fa-fw  iconsmall" aria-hidden="true" aria-label="" style="cursor: move;"></i></span></span>
                            </div>
                            <div class="actions">
                                {{{completion}}}
                                {{{modicons}}}
                            </div>
                            <div class="contentafterlink">
                                {{{summary}}}
                            </div>
                            {{{availstatus}}}
                        </div>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="activity ';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' justify-content-center list-unstyled yui3-dd-drop" id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-draggroups="resource">
';
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                            <div class="activityinstance p-0 d-inline-block">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                <span class="pl-10"><span class="editing_move moodle-core-dragdrop-draghandle" title="';
                $value = $context->find('str');
                $buffer .= $this->section2f2d0dd50f47ff116e731c3cedcc2d95($context, $indent, $value);
                $buffer .= '" tabindex="0" data-draggroups="resource" role="button" data-sectionreturn="0"><i class="icon fa fa-arrows fa-fw  iconsmall" aria-hidden="true" aria-label="" style="cursor: move;"></i></span></span>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="actions">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('modicons'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="contentafterlink">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            ';
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

}
