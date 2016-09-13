<?php
namespace Math\SetTheory;

class ImmutableSetTest extends \PHPUnit_Framework_TestCase
{
    public function testAddDoesNothing()
    {
        $A = new ImmutableSet([1, 2, 3, 4]);
        $B = $A->copy();

        $A->add(5);
        $A->add(6);
        $A->add([7, 8, 9]);
        $A->add(new Set(['a', 'b']));

        $this->assertEquals($B, $A);
        $this->assertEquals($B->asArray(), $A->asArray());
    }

    public function testAddMultiDoesNothing()
    {
        $A = new ImmutableSet([1, 2, 3, 4]);
        $B = $A->copy();

        $A->addMulti([5]);
        $A->addMulti([6, 7, 8]);
        $A->addMulti([7, 8, 9]);
        $A->addMulti([new Set(['a', 'b'])]);

        $this->assertEquals($B, $A);
        $this->assertEquals($B->asArray(), $A->asArray());
    }

    public function testRemoveDoesNothing()
    {
        $A = new ImmutableSet([1, 2, 3, 4]);
        $B = $A->copy();

        $A->remove(1);
        $A->remove([2, 3]);

        $this->assertEquals($B, $A);
        $this->assertEquals($B->asArray(), $A->asArray());
    }

    public function testRemoveMultiDoesNothing()
    {
        $A = new ImmutableSet([1, 2, 3, 4]);
        $B = $A->copy();

        $A->removeMulti([1]);
        $A->removeMulti([2, 3]);

        $this->assertEquals($B, $A);
        $this->assertEquals($B->asArray(), $A->asArray());
    }

    public function testClearDoesNothing()
    {
        $A = new ImmutableSet([1, 2, 3, 4]);
        $B = $A->copy();

        $A->clear();

        $this->assertEquals($B, $A);
        $this->assertEquals($B->asArray(), $A->asArray());
    }
}