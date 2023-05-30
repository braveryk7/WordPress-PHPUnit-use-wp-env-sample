<?php

use Yoast\WPTestUtils\WPIntegration\TestCase;

class Example_Class_Test extends TestCase {
    private $instance;

    public function set_up(): void {
        parent::set_up();

        // テスト対象のクラスをインスタンス化して$this->instanceに格納
        $this->instance = new Example_Plugin();
    }

    public function test_set_my_option_before_execute() {
        // プラグイン実行前は当然my_optionカラムが存在しないのでfalseが返ってくることを確認
        $this->assertFalse( get_option( 'my_option' ) );
    }

    public function test_set_my_option_after_execute() {
        // set_my_optionメソッドを実行
        $this->instance->set_my_option();

        // プラグインが実行されたのでmy_optionカラムの値が'my_value'と同一であることを確認
        $this->assertSame( 'my_value', get_option( 'my_option' ) );
    }
}