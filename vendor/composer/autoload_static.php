<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b480072e220f75d8002b1515dcc77a9
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphqlGutenberg\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphqlGutenberg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPGraphQLGutenberg\\Admin\\Editor' => __DIR__ . '/../..' . '/src/Admin/Editor.php',
        'WPGraphQLGutenberg\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'WPGraphQLGutenberg\\Blocks\\Block' => __DIR__ . '/../..' . '/src/Blocks/Block.php',
        'WPGraphQLGutenberg\\Blocks\\Registry' => __DIR__ . '/../..' . '/src/Blocks/Registry.php',
        'WPGraphQLGutenberg\\Blocks\\RegistryNotSourcedException' => __DIR__ . '/../..' . '/src/Blocks/Registry.php',
        'WPGraphQLGutenberg\\Blocks\\Utils' => __DIR__ . '/../..' . '/src/Blocks/Utils.php',
        'WPGraphQLGutenberg\\PostTypes\\BlockEditorPreview' => __DIR__ . '/../..' . '/src/PostTypes/BlockEditorPreview.php',
        'WPGraphQLGutenberg\\PostTypes\\ReusableBlock' => __DIR__ . '/../..' . '/src/PostTypes/ReusableBlock.php',
        'WPGraphQLGutenberg\\Rest\\Rest' => __DIR__ . '/../..' . '/src/Rest/Rest.php',
        'WPGraphQLGutenberg\\Schema\\Schema' => __DIR__ . '/../..' . '/src/Schema/Schema.php',
        'WPGraphQLGutenberg\\Schema\\Types\\BlockTypes' => __DIR__ . '/../..' . '/src/Schema/Types/BlockTypes.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Connection\\BlockEditorContentNodeConnection' => __DIR__ . '/../..' . '/src/Schema/Types/Connection/BlockEditorContentNodeConnection.php',
        'WPGraphQLGutenberg\\Schema\\Types\\InterfaceType\\Block' => __DIR__ . '/../..' . '/src/Schema/Types/InterfaceType/Block.php',
        'WPGraphQLGutenberg\\Schema\\Types\\InterfaceType\\BlockEditorContentNode' => __DIR__ . '/../..' . '/src/Schema/Types/InterfaceType/BlockEditorContentNode.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Object\\ReusableBlock' => __DIR__ . '/../..' . '/src/Schema/Types/Object/ReusableBlock.php',
        'WPGraphQLGutenberg\\Schema\\Types\\Scalar\\Scalar' => __DIR__ . '/../..' . '/src/Schema/Types/Scalar/Scalar.php',
        'WPGraphQLGutenberg\\Schema\\Utils' => __DIR__ . '/../..' . '/src/Schema/Utils.php',
        'WPGraphQLGutenberg\\Server\\Server' => __DIR__ . '/../..' . '/src/Server/Server.php',
        'WPGraphQLGutenberg\\Server\\ServerException' => __DIR__ . '/../..' . '/src/Server/Server.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b480072e220f75d8002b1515dcc77a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b480072e220f75d8002b1515dcc77a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b480072e220f75d8002b1515dcc77a9::$classMap;

        }, null, ClassLoader::class);
    }
}
