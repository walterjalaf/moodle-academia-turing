<?php

class __Mustache_15769b11fcf5d3d0d79c616c5973738b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('tagscount');
        $buffer .= $this->section3fda6ac1706d8e485f750c519712377e($context, $indent, $value);

        return $buffer;
    }

    private function section35cd54248ef1a2a54527fd6114b87692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardtag';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'standardtag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67d917c513e274c1292567be669478cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'numberofentries, blog, {{count}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'numberofentries, blog, ';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b9c3e50b072e25df976c5cdd468c050(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{#str}}numberofentries, blog, {{count}}{{/str}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $context->find('str');
                $buffer .= $this->section67d917c513e274c1292567be669478cc($context, $indent, $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fbc5213549e4b027676284bae96d787(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="flagged-tag">{{name}}</span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <span class="flagged-tag">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB28821b419c25536bfab5aa7e1370d96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                <a href="{{viewurl}}" class="{{#isstandard}}standardtag{{/isstandard}} s{{size}}"
                    {{#count}}title="{{#str}}numberofentries, blog, {{count}}{{/str}}"{{/count}}>
                        {{#flag}}
                            <span class="flagged-tag">{{name}}</span>
                        {{/flag}}
                        {{^flag}}
                            {{name}}
                        {{/flag}}
                </a>
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $context->find('isstandard');
                $buffer .= $this->section35cd54248ef1a2a54527fd6114b87692($context, $indent, $value);
                $buffer .= ' s';
                $value = $this->resolveValue($context->find('size'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    ';
                $value = $context->find('count');
                $buffer .= $this->section3b9c3e50b072e25df976c5cdd468c050($context, $indent, $value);
                $buffer .= '>
';
                $value = $context->find('flag');
                $buffer .= $this->section6fbc5213549e4b027676284bae96d787($context, $indent, $value);
                $value = $context->find('flag');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                }
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67eebbdd04f100bc980e047ad113cf99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showingfirsttags, core_tag, {{tagscount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showingfirsttags, core_tag, ';
                $value = $this->resolveValue($context->find('tagscount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c5d9b73fa62ebdad7f5b54c16e8126d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="tag_overflow">
            {{#str}} showingfirsttags, core_tag, {{tagscount}} {{/str}}
        </p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p class="tag_overflow">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section67eebbdd04f100bc980e047ad113cf99($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fda6ac1706d8e485f750c519712377e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="tag_cloud">
    <ul class="inline-list">
        {{#tags}}
            <li>
                <a href="{{viewurl}}" class="{{#isstandard}}standardtag{{/isstandard}} s{{size}}"
                    {{#count}}title="{{#str}}numberofentries, blog, {{count}}{{/str}}"{{/count}}>
                        {{#flag}}
                            <span class="flagged-tag">{{name}}</span>
                        {{/flag}}
                        {{^flag}}
                            {{name}}
                        {{/flag}}
                </a>
            </li>
        {{/tags}}
    </ul>
    {{#overflow}}
        <p class="tag_overflow">
            {{#str}} showingfirsttags, core_tag, {{tagscount}} {{/str}}
        </p>
    {{/overflow}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="tag_cloud">
';
                $buffer .= $indent . '    <ul class="inline-list">
';
                $value = $context->find('tags');
                $buffer .= $this->sectionB28821b419c25536bfab5aa7e1370d96($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $value = $context->find('overflow');
                $buffer .= $this->section8c5d9b73fa62ebdad7f5b54c16e8126d($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
