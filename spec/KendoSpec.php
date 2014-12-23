<?php

namespace spec\Kendo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KendoSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Kendo\Kendo');
    }

    public function it_creates_widget_base_class()
    {
        $this->create(Argument::any())->shouldBeAnInstanceOf('Kendo\Widget\Base');
    }

    public function it_creates_overridden_class()
    {
        $this->create('Model')->shouldBeAnInstanceOf('Kendo\Widget\Model');
    }

    public function it_creates_javascript_function_class()
    {
        $this->js(Argument::any())->shouldBeAnInstanceOf('Kendo\JavascriptFunction');
    }

    public function it_creates_date_javascript_object()
    {
        $this->date('2010-01-01 00:00:00')->shouldBeAnInstanceOf('Kendo\JavascriptFunction');
    }

    public function it_returns_null_for_wrong_date()
    {
        $this->date(Argument::any())->shouldReturn(null);
    }
}