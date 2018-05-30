<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit174d277c48faaef2fa738c0ae3fc7020
{
    public static $files = array (
        '23842c11409ef125f7fd90c8b167279e' => __DIR__ . '/..' . '/wikimedia/at-ease/src/MediaWiki/Functions.php',
        'eccc0347283a01e62f5536bcf76b6e62' => __DIR__ . '/..' . '/wikimedia/at-ease/src/Wikimedia/Functions.php',
        'c3f7f0e81464740a933532e81fa26cc7' => __DIR__ . '/..' . '/wikimedia/base-convert/src/Functions.php',
        '4d945db823e5f6ca6dd83ad1f5fbcc43' => __DIR__ . '/..' . '/wikimedia/relpath/src/RelPath/RelPath.php',
        '6513700b70192b7dfd0e5e9fc8082cf3' => __DIR__ . '/..' . '/wikimedia/relpath/src/Wikimedia/RelPath.php',
        'c50606d667a3fde2b80a955639479d3d' => __DIR__ . '/..' . '/wikimedia/timestamp/src/defines.php',
        '38db717deddb215de53e36c2c0bc9e7e' => __DIR__ . '/../..' . '/includes/compat/Timestamp.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WrappedString\\' => 14,
            'Wikimedia\\Purtle\\Tests\\' => 23,
            'Wikimedia\\Purtle\\' => 17,
            'Wikimedia\\Composer\\' => 19,
            'Wikimedia\\Assert\\Test\\' => 22,
            'Wikimedia\\Assert\\' => 17,
            'Wikimedia\\' => 10,
        ),
        'R' => 
        array (
            'RemexHtml\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
            'CLDRPluralRuleParser\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WrappedString\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/WrappedString',
        ),
        'Wikimedia\\Purtle\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/purtle/tests/phpunit',
        ),
        'Wikimedia\\Purtle\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/purtle/src',
        ),
        'Wikimedia\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src',
        ),
        'Wikimedia\\Assert\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/assert/tests/phpunit',
        ),
        'Wikimedia\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/assert/src',
        ),
        'Wikimedia\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/object-factory/src',
            1 => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/Wikimedia',
        ),
        'RemexHtml\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'CLDRPluralRuleParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Liuggio' => 
            array (
                0 => __DIR__ . '/..' . '/liuggio/statsd-php-client/src',
            ),
            'Less' => 
            array (
                0 => __DIR__ . '/..' . '/oyejorge/less.php/lib',
            ),
        ),
        'C' => 
        array (
            'ComposerVendorHtaccessCreator' => 
            array (
                0 => __DIR__ . '/../..' . '/includes/composer',
            ),
            'ComposerHookHandler' => 
            array (
                0 => __DIR__ . '/../..' . '/includes/composer',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/cssjanus/cssjanus/src',
    );

    public static $classMap = array (
        'CLDRPluralRuleParser\\Converter' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter.php',
        'CLDRPluralRuleParser\\Converter\\Expression' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter/Expression.php',
        'CLDRPluralRuleParser\\Converter\\Fragment' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter/Fragment.php',
        'CLDRPluralRuleParser\\Converter\\Operator' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Converter/Operator.php',
        'CLDRPluralRuleParser\\Error' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Error.php',
        'CLDRPluralRuleParser\\Evaluator' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Evaluator.php',
        'CLDRPluralRuleParser\\Range' => __DIR__ . '/..' . '/wikimedia/cldr-plural-rule-parser/src/Range.php',
        'CSSJanus' => __DIR__ . '/..' . '/cssjanus/cssjanus/src/CSSJanus.php',
        'CSSJanusTokenizer' => __DIR__ . '/..' . '/cssjanus/cssjanus/src/CSSJanus.php',
        'Cdb\\Exception' => __DIR__ . '/..' . '/wikimedia/cdb/src/Exception.php',
        'Cdb\\Reader' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader.php',
        'Cdb\\Reader\\DBA' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader/DBA.php',
        'Cdb\\Reader\\Hash' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader/Hash.php',
        'Cdb\\Reader\\PHP' => __DIR__ . '/..' . '/wikimedia/cdb/src/Reader/PHP.php',
        'Cdb\\Util' => __DIR__ . '/..' . '/wikimedia/cdb/src/Util.php',
        'Cdb\\Writer' => __DIR__ . '/..' . '/wikimedia/cdb/src/Writer.php',
        'Cdb\\Writer\\DBA' => __DIR__ . '/..' . '/wikimedia/cdb/src/Writer/DBA.php',
        'Cdb\\Writer\\PHP' => __DIR__ . '/..' . '/wikimedia/cdb/src/Writer/PHP.php',
        'ComposerHookHandler' => __DIR__ . '/../..' . '/includes/composer/ComposerHookHandler.php',
        'ComposerVendorHtaccessCreator' => __DIR__ . '/../..' . '/includes/composer/ComposerVendorHtaccessCreator.php',
        'Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'Composer\\Semver\\Constraint\\AbstractConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/AbstractConstraint.php',
        'Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'Composer\\Semver\\Constraint\\EmptyConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/EmptyConstraint.php',
        'Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'HtmlFormatter\\HtmlFormatter' => __DIR__ . '/..' . '/wikimedia/html-formatter/src/HtmlFormatter.php',
        'IPSet\\IPSet' => __DIR__ . '/..' . '/wikimedia/ip-set/src/IPSet/IPSet.php',
        'LCRun3' => __DIR__ . '/..' . '/zordius/lightncandy/src/lightncandy.php',
        'Less_Autoloader' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Autoloader.php',
        'Less_Cache' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Cache.php',
        'Less_Colors' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Colors.php',
        'Less_Configurable' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Configurable.php',
        'Less_Environment' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Environment.php',
        'Less_Exception_Chunk' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Exception/Chunk.php',
        'Less_Exception_Compiler' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Exception/Compiler.php',
        'Less_Exception_Parser' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Exception/Parser.php',
        'Less_Functions' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Functions.php',
        'Less_Mime' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Mime.php',
        'Less_Output' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Output.php',
        'Less_Output_Mapped' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Output/Mapped.php',
        'Less_Parser' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Parser.php',
        'Less_SourceMap_Base64VLQ' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/SourceMap/Base64VLQ.php',
        'Less_SourceMap_Generator' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/SourceMap/Generator.php',
        'Less_Tree' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree.php',
        'Less_Tree_Alpha' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Alpha.php',
        'Less_Tree_Anonymous' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Anonymous.php',
        'Less_Tree_Assignment' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Assignment.php',
        'Less_Tree_Attribute' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Attribute.php',
        'Less_Tree_Call' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Call.php',
        'Less_Tree_Color' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Color.php',
        'Less_Tree_Comment' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Comment.php',
        'Less_Tree_Condition' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Condition.php',
        'Less_Tree_DefaultFunc' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/DefaultFunc.php',
        'Less_Tree_DetachedRuleset' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/DetachedRuleset.php',
        'Less_Tree_Dimension' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Dimension.php',
        'Less_Tree_Directive' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Directive.php',
        'Less_Tree_Element' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Element.php',
        'Less_Tree_Expression' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Expression.php',
        'Less_Tree_Extend' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Extend.php',
        'Less_Tree_Import' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Import.php',
        'Less_Tree_Javascript' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Javascript.php',
        'Less_Tree_Keyword' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Keyword.php',
        'Less_Tree_Media' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Media.php',
        'Less_Tree_Mixin_Call' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Mixin/Call.php',
        'Less_Tree_Mixin_Definition' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Mixin/Definition.php',
        'Less_Tree_NameValue' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/NameValue.php',
        'Less_Tree_Negative' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Negative.php',
        'Less_Tree_Operation' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Operation.php',
        'Less_Tree_Paren' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Paren.php',
        'Less_Tree_Quoted' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Quoted.php',
        'Less_Tree_Rule' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Rule.php',
        'Less_Tree_Ruleset' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Ruleset.php',
        'Less_Tree_RulesetCall' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/RulesetCall.php',
        'Less_Tree_Selector' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Selector.php',
        'Less_Tree_UnicodeDescriptor' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/UnicodeDescriptor.php',
        'Less_Tree_Unit' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Unit.php',
        'Less_Tree_UnitConversions' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/UnitConversions.php',
        'Less_Tree_Url' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Url.php',
        'Less_Tree_Value' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Value.php',
        'Less_Tree_Variable' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Tree/Variable.php',
        'Less_Version' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Version.php',
        'Less_Visitor' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor.php',
        'Less_VisitorReplacing' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/VisitorReplacing.php',
        'Less_Visitor_extendFinder' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/extendFinder.php',
        'Less_Visitor_joinSelector' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/joinSelector.php',
        'Less_Visitor_processExtends' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/processExtends.php',
        'Less_Visitor_toCSS' => __DIR__ . '/..' . '/oyejorge/less.php/lib/Less/Visitor/toCSS.php',
        'LightnCandy' => __DIR__ . '/..' . '/zordius/lightncandy/src/lightncandy.php',
        'Liuggio\\StatsdClient\\Entity\\StatsdData' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Entity/StatsdData.php',
        'Liuggio\\StatsdClient\\Entity\\StatsdDataInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Entity/StatsdDataInterface.php',
        'Liuggio\\StatsdClient\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Exception/InvalidArgumentException.php',
        'Liuggio\\StatsdClient\\Factory\\StatsdDataFactory' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Factory/StatsdDataFactory.php',
        'Liuggio\\StatsdClient\\Factory\\StatsdDataFactoryInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Factory/StatsdDataFactoryInterface.php',
        'Liuggio\\StatsdClient\\Monolog\\Formatter\\StatsDFormatter' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Monolog/Formatter/StatsDFormatter.php',
        'Liuggio\\StatsdClient\\Monolog\\Handler\\StatsDHandler' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Monolog/Handler/StatsDHandler.php',
        'Liuggio\\StatsdClient\\Sender\\EchoSender' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/EchoSender.php',
        'Liuggio\\StatsdClient\\Sender\\SenderInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/SenderInterface.php',
        'Liuggio\\StatsdClient\\Sender\\SocketSender' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/SocketSender.php',
        'Liuggio\\StatsdClient\\Sender\\SysLogSender' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Sender/SysLogSender.php',
        'Liuggio\\StatsdClient\\Service\\StatsdService' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/Service/StatsdService.php',
        'Liuggio\\StatsdClient\\StatsdClient' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/StatsdClient.php',
        'Liuggio\\StatsdClient\\StatsdClientInterface' => __DIR__ . '/..' . '/liuggio/statsd-php-client/src/Liuggio/StatsdClient/StatsdClientInterface.php',
        'OOUI\\AccessKeyedElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/AccessKeyedElement.php',
        'OOUI\\ActionFieldLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/ActionFieldLayout.php',
        'OOUI\\ApexTheme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/themes/ApexTheme.php',
        'OOUI\\BlankTheme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/themes/BlankTheme.php',
        'OOUI\\ButtonElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/ButtonElement.php',
        'OOUI\\ButtonGroupWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ButtonGroupWidget.php',
        'OOUI\\ButtonInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ButtonInputWidget.php',
        'OOUI\\ButtonWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ButtonWidget.php',
        'OOUI\\CheckboxInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/CheckboxInputWidget.php',
        'OOUI\\CheckboxMultiselectInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/CheckboxMultiselectInputWidget.php',
        'OOUI\\ComboBoxInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ComboBoxInputWidget.php',
        'OOUI\\DropdownInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/DropdownInputWidget.php',
        'OOUI\\Element' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Element.php',
        'OOUI\\Exception' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Exception.php',
        'OOUI\\FieldLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/FieldLayout.php',
        'OOUI\\FieldsetLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/FieldsetLayout.php',
        'OOUI\\FlaggedElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/FlaggedElement.php',
        'OOUI\\FormLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/FormLayout.php',
        'OOUI\\GroupElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/GroupElement.php',
        'OOUI\\HiddenInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/HiddenInputWidget.php',
        'OOUI\\HorizontalLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/HorizontalLayout.php',
        'OOUI\\HtmlSnippet' => __DIR__ . '/..' . '/oojs/oojs-ui/php/HtmlSnippet.php',
        'OOUI\\IconElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/IconElement.php',
        'OOUI\\IconWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/IconWidget.php',
        'OOUI\\IndicatorElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/IndicatorElement.php',
        'OOUI\\IndicatorWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/IndicatorWidget.php',
        'OOUI\\InputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/InputWidget.php',
        'OOUI\\LabelElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/LabelElement.php',
        'OOUI\\LabelWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/LabelWidget.php',
        'OOUI\\Layout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Layout.php',
        'OOUI\\MultilineTextInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/MultilineTextInputWidget.php',
        'OOUI\\PanelLayout' => __DIR__ . '/..' . '/oojs/oojs-ui/php/layouts/PanelLayout.php',
        'OOUI\\ProgressBarWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/ProgressBarWidget.php',
        'OOUI\\RadioInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/RadioInputWidget.php',
        'OOUI\\RadioSelectInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/RadioSelectInputWidget.php',
        'OOUI\\SearchInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/SearchInputWidget.php',
        'OOUI\\TabIndexedElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/TabIndexedElement.php',
        'OOUI\\Tag' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Tag.php',
        'OOUI\\TextInputWidget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/widgets/TextInputWidget.php',
        'OOUI\\Theme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Theme.php',
        'OOUI\\TitledElement' => __DIR__ . '/..' . '/oojs/oojs-ui/php/mixins/TitledElement.php',
        'OOUI\\Widget' => __DIR__ . '/..' . '/oojs/oojs-ui/php/Widget.php',
        'OOUI\\WikimediaUITheme' => __DIR__ . '/..' . '/oojs/oojs-ui/php/themes/WikimediaUITheme.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'RemexHtml\\DOM\\DOMBuilder' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/DOM/DOMBuilder.php',
        'RemexHtml\\DOM\\DOMFormatter' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/DOM/DOMFormatter.php',
        'RemexHtml\\DOM\\DOMSerializer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/DOM/DOMSerializer.php',
        'RemexHtml\\DOM\\DOMUtils' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/DOM/DOMUtils.php',
        'RemexHtml\\GenerateDataFiles' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/GenerateDataFiles.php',
        'RemexHtml\\HTMLData' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/HTMLData.php',
        'RemexHtml\\PropGuard' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/PropGuard.php',
        'RemexHtml\\Serializer\\AbstractSerializer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/AbstractSerializer.php',
        'RemexHtml\\Serializer\\DepurateFormatter' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/DepurateFormatter.php',
        'RemexHtml\\Serializer\\FastFormatter' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/FastFormatter.php',
        'RemexHtml\\Serializer\\Formatter' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/Formatter.php',
        'RemexHtml\\Serializer\\HtmlFormatter' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/HtmlFormatter.php',
        'RemexHtml\\Serializer\\Serializer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/Serializer.php',
        'RemexHtml\\Serializer\\SerializerError' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/SerializerError.php',
        'RemexHtml\\Serializer\\SerializerNode' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/SerializerNode.php',
        'RemexHtml\\Serializer\\TestFormatter' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Serializer/TestFormatter.php',
        'RemexHtml\\Tokenizer\\Attribute' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/Attribute.php',
        'RemexHtml\\Tokenizer\\Attributes' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/Attributes.php',
        'RemexHtml\\Tokenizer\\LazyAttributes' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/LazyAttributes.php',
        'RemexHtml\\Tokenizer\\PlainAttributes' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/PlainAttributes.php',
        'RemexHtml\\Tokenizer\\TestTokenHandler' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/TestTokenHandler.php',
        'RemexHtml\\Tokenizer\\TokenGenerator' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/TokenGenerator.php',
        'RemexHtml\\Tokenizer\\TokenGeneratorHandler' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/TokenGeneratorHandler.php',
        'RemexHtml\\Tokenizer\\TokenHandler' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/TokenHandler.php',
        'RemexHtml\\Tokenizer\\TokenSerializer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/TokenSerializer.php',
        'RemexHtml\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/Tokenizer.php',
        'RemexHtml\\Tokenizer\\TokenizerError' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/Tokenizer/TokenizerError.php',
        'RemexHtml\\TreeBuilder\\ActiveFormattingElements' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/ActiveFormattingElements.php',
        'RemexHtml\\TreeBuilder\\AfterAfterBody' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/AfterAfterBody.php',
        'RemexHtml\\TreeBuilder\\AfterAfterFrameset' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/AfterAfterFrameset.php',
        'RemexHtml\\TreeBuilder\\AfterBody' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/AfterBody.php',
        'RemexHtml\\TreeBuilder\\AfterFrameset' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/AfterFrameset.php',
        'RemexHtml\\TreeBuilder\\AfterHead' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/AfterHead.php',
        'RemexHtml\\TreeBuilder\\BeforeHead' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/BeforeHead.php',
        'RemexHtml\\TreeBuilder\\BeforeHtml' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/BeforeHtml.php',
        'RemexHtml\\TreeBuilder\\CachingStack' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/CachingStack.php',
        'RemexHtml\\TreeBuilder\\DestructTracer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/DestructTracer.php',
        'RemexHtml\\TreeBuilder\\DestructTracerNode' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/DestructTracerNode.php',
        'RemexHtml\\TreeBuilder\\DispatchTracer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/DispatchTracer.php',
        'RemexHtml\\TreeBuilder\\Dispatcher' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/Dispatcher.php',
        'RemexHtml\\TreeBuilder\\Element' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/Element.php',
        'RemexHtml\\TreeBuilder\\ForeignAttributes' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/ForeignAttributes.php',
        'RemexHtml\\TreeBuilder\\FormattingElement' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/FormattingElement.php',
        'RemexHtml\\TreeBuilder\\InBody' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InBody.php',
        'RemexHtml\\TreeBuilder\\InCaption' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InCaption.php',
        'RemexHtml\\TreeBuilder\\InCell' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InCell.php',
        'RemexHtml\\TreeBuilder\\InColumnGroup' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InColumnGroup.php',
        'RemexHtml\\TreeBuilder\\InForeignContent' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InForeignContent.php',
        'RemexHtml\\TreeBuilder\\InFrameset' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InFrameset.php',
        'RemexHtml\\TreeBuilder\\InHead' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InHead.php',
        'RemexHtml\\TreeBuilder\\InHeadNoscript' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InHeadNoscript.php',
        'RemexHtml\\TreeBuilder\\InPre' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InPre.php',
        'RemexHtml\\TreeBuilder\\InRow' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InRow.php',
        'RemexHtml\\TreeBuilder\\InSelect' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InSelect.php',
        'RemexHtml\\TreeBuilder\\InSelectInTable' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InSelectInTable.php',
        'RemexHtml\\TreeBuilder\\InTable' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InTable.php',
        'RemexHtml\\TreeBuilder\\InTableBody' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InTableBody.php',
        'RemexHtml\\TreeBuilder\\InTableText' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InTableText.php',
        'RemexHtml\\TreeBuilder\\InTemplate' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InTemplate.php',
        'RemexHtml\\TreeBuilder\\InTextarea' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InTextarea.php',
        'RemexHtml\\TreeBuilder\\Initial' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/Initial.php',
        'RemexHtml\\TreeBuilder\\InsertionMode' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/InsertionMode.php',
        'RemexHtml\\TreeBuilder\\Marker' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/Marker.php',
        'RemexHtml\\TreeBuilder\\SimpleStack' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/SimpleStack.php',
        'RemexHtml\\TreeBuilder\\Stack' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/Stack.php',
        'RemexHtml\\TreeBuilder\\TemplateModeStack' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/TemplateModeStack.php',
        'RemexHtml\\TreeBuilder\\Text' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/Text.php',
        'RemexHtml\\TreeBuilder\\TreeBuilder' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/TreeBuilder.php',
        'RemexHtml\\TreeBuilder\\TreeBuilderError' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/TreeBuilderError.php',
        'RemexHtml\\TreeBuilder\\TreeHandler' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/TreeHandler.php',
        'RemexHtml\\TreeBuilder\\TreeMutationTracer' => __DIR__ . '/..' . '/wikimedia/remex-html/RemexHtml/TreeBuilder/TreeMutationTracer.php',
        'RunningStat\\PSquare' => __DIR__ . '/..' . '/wikimedia/running-stat/src/RunningStat/PSquare.php',
        'RunningStat\\RunningStat' => __DIR__ . '/..' . '/wikimedia/running-stat/src/RunningStat/RunningStat.php',
        'UtfNormal\\Constants' => __DIR__ . '/..' . '/wikimedia/utfnormal/src/Constants.php',
        'UtfNormal\\Utils' => __DIR__ . '/..' . '/wikimedia/utfnormal/src/Util.php',
        'UtfNormal\\Validator' => __DIR__ . '/..' . '/wikimedia/utfnormal/src/Validator.php',
        'Wikimedia\\Assert\\Assert' => __DIR__ . '/..' . '/wikimedia/assert/src/Assert.php',
        'Wikimedia\\Assert\\AssertionException' => __DIR__ . '/..' . '/wikimedia/assert/src/AssertionException.php',
        'Wikimedia\\Assert\\InvariantException' => __DIR__ . '/..' . '/wikimedia/assert/src/InvariantException.php',
        'Wikimedia\\Assert\\ParameterAssertionException' => __DIR__ . '/..' . '/wikimedia/assert/src/ParameterAssertionException.php',
        'Wikimedia\\Assert\\ParameterElementTypeException' => __DIR__ . '/..' . '/wikimedia/assert/src/ParameterElementTypeException.php',
        'Wikimedia\\Assert\\ParameterTypeException' => __DIR__ . '/..' . '/wikimedia/assert/src/ParameterTypeException.php',
        'Wikimedia\\Assert\\PostconditionException' => __DIR__ . '/..' . '/wikimedia/assert/src/PostconditionException.php',
        'Wikimedia\\Assert\\PreconditionException' => __DIR__ . '/..' . '/wikimedia/assert/src/PreconditionException.php',
        'Wikimedia\\Assert\\Test\\AssertTest' => __DIR__ . '/..' . '/wikimedia/assert/tests/phpunit/AssertTest.php',
        'Wikimedia\\Composer\\Logger' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Logger.php',
        'Wikimedia\\Composer\\MergePlugin' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/MergePlugin.php',
        'Wikimedia\\Composer\\Merge\\ExtraPackage' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/ExtraPackage.php',
        'Wikimedia\\Composer\\Merge\\MissingFileException' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/MissingFileException.php',
        'Wikimedia\\Composer\\Merge\\NestedArray' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/NestedArray.php',
        'Wikimedia\\Composer\\Merge\\PluginState' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/PluginState.php',
        'Wikimedia\\Composer\\Merge\\StabilityFlags' => __DIR__ . '/..' . '/wikimedia/composer-merge-plugin/src/Merge/StabilityFlags.php',
        'Wikimedia\\IPSet' => __DIR__ . '/..' . '/wikimedia/ip-set/src/Wikimedia/IPSet.php',
        'Wikimedia\\ObjectFactory' => __DIR__ . '/..' . '/wikimedia/object-factory/src/ObjectFactory.php',
        'Wikimedia\\PSquare' => __DIR__ . '/..' . '/wikimedia/running-stat/src/Wikimedia/PSquare.php',
        'Wikimedia\\PhpSessionSerializer' => __DIR__ . '/..' . '/wikimedia/php-session-serializer/src/Wikimedia/PhpSessionSerializer.php',
        'Wikimedia\\Purtle\\BNodeLabeler' => __DIR__ . '/..' . '/wikimedia/purtle/src/BNodeLabeler.php',
        'Wikimedia\\Purtle\\JsonLdRdfWriter' => __DIR__ . '/..' . '/wikimedia/purtle/src/JsonLdRdfWriter.php',
        'Wikimedia\\Purtle\\N3Quoter' => __DIR__ . '/..' . '/wikimedia/purtle/src/N3Quoter.php',
        'Wikimedia\\Purtle\\N3RdfWriterBase' => __DIR__ . '/..' . '/wikimedia/purtle/src/N3RdfWriterBase.php',
        'Wikimedia\\Purtle\\NTriplesRdfWriter' => __DIR__ . '/..' . '/wikimedia/purtle/src/NTriplesRdfWriter.php',
        'Wikimedia\\Purtle\\RdfWriter' => __DIR__ . '/..' . '/wikimedia/purtle/src/RdfWriter.php',
        'Wikimedia\\Purtle\\RdfWriterBase' => __DIR__ . '/..' . '/wikimedia/purtle/src/RdfWriterBase.php',
        'Wikimedia\\Purtle\\RdfWriterFactory' => __DIR__ . '/..' . '/wikimedia/purtle/src/RdfWriterFactory.php',
        'Wikimedia\\Purtle\\TurtleRdfWriter' => __DIR__ . '/..' . '/wikimedia/purtle/src/TurtleRdfWriter.php',
        'Wikimedia\\Purtle\\UnicodeEscaper' => __DIR__ . '/..' . '/wikimedia/purtle/src/UnicodeEscaper.php',
        'Wikimedia\\Purtle\\XmlRdfWriter' => __DIR__ . '/..' . '/wikimedia/purtle/src/XmlRdfWriter.php',
        'Wikimedia\\RunningStat' => __DIR__ . '/..' . '/wikimedia/running-stat/src/Wikimedia/RunningStat.php',
        'Wikimedia\\ScopedCallback' => __DIR__ . '/..' . '/wikimedia/scoped-callback/src/ScopedCallback.php',
        'Wikimedia\\Timestamp\\ConvertibleTimestamp' => __DIR__ . '/..' . '/wikimedia/timestamp/src/ConvertibleTimestamp.php',
        'Wikimedia\\Timestamp\\TimestampException' => __DIR__ . '/..' . '/wikimedia/timestamp/src/TimestampException.php',
        'Wikimedia\\WaitConditionLoop' => __DIR__ . '/..' . '/wikimedia/wait-condition-loop/src/WaitConditionLoop.php',
        'Wikimedia\\WrappedString' => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/Wikimedia/WrappedString.php',
        'Wikimedia\\WrappedStringList' => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/Wikimedia/WrappedStringList.php',
        'WrappedString\\WrappedString' => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/WrappedString/WrappedString.php',
        'WrappedString\\WrappedStringList' => __DIR__ . '/..' . '/wikimedia/wrappedstring/src/WrappedString/WrappedStringList.php',
        'lessc' => __DIR__ . '/..' . '/oyejorge/less.php/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit174d277c48faaef2fa738c0ae3fc7020::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit174d277c48faaef2fa738c0ae3fc7020::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit174d277c48faaef2fa738c0ae3fc7020::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit174d277c48faaef2fa738c0ae3fc7020::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit174d277c48faaef2fa738c0ae3fc7020::$classMap;

        }, null, ClassLoader::class);
    }
}
