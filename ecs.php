<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Symplify\CodingStandard\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['clean-code', 'common', 'psr12']);

    $parameters->set('skip', ['SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff' => null, 'PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer' => null, 'PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer' => null, 'PhpCsFixer\Fixer\Strict\StrictComparisonFixer' => null, 'PhpCsFixer\Fixer\Strict\StrictParamFixer' => null, 'PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer' => null, 'PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer' => null
        ]
    );

    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)
        ->call('configure', [[
            'syntax' => 'short',
        ]]);


    //Pour utiliser la règle stand alone line in multiline array
    $services->set(StandaloneLineInMultilineArrayFixer::class);
    
    // run and fix, one by one
    $containerConfigurator->import(SetList::SPACES);
    $containerConfigurator->import(SetList::ARRAY);
    $containerConfigurator->import(SetList::DOCBLOCK);
    $containerConfigurator->import(SetList::PSR_12);
};
