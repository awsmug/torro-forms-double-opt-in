<?php

namespace awsmug\TorroFormsDoubleOptIn\Tests;

use awsmug\Torro_Forms\Tests\Unit_Test_Case;
use awsmug\TorroFormsDoubleOptIn\Extension;

class Tests_Load extends Unit_Test_Case {

	public function test_extension_loaded() {
		$instance = torro()->extensions()->get( 'torro_forms_double_opt_in' );

		$this->assertInstanceOf( Extension::class, $instance );
	}

	/**
	 * @expectedIncorrectUsage awsmug\Torro_Forms\Components\Extensions::register()
	 */
	public function test_torro_forms_double_opt_in_load() {
		// This must error because the extension will already be registered.
		$result = torro_forms_double_opt_in_load( torro() );

		$this->assertWPError( $result );
	}
}
