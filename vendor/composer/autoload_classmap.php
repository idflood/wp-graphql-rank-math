<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AxeWP\\GraphQL\\Abstracts\\ConnectionType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/ConnectionType.php',
    'AxeWP\\GraphQL\\Abstracts\\EnumType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/EnumType.php',
    'AxeWP\\GraphQL\\Abstracts\\FieldsType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/FieldsType.php',
    'AxeWP\\GraphQL\\Abstracts\\InputType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/InputType.php',
    'AxeWP\\GraphQL\\Abstracts\\InterfaceType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/InterfaceType.php',
    'AxeWP\\GraphQL\\Abstracts\\MutationType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/MutationType.php',
    'AxeWP\\GraphQL\\Abstracts\\ObjectType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/ObjectType.php',
    'AxeWP\\GraphQL\\Abstracts\\Type' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/Type.php',
    'AxeWP\\GraphQL\\Abstracts\\UnionType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Abstracts/UnionType.php',
    'AxeWP\\GraphQL\\Helper\\Helper' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Helper/Helper.php',
    'AxeWP\\GraphQL\\Interfaces\\GraphQLType' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Interfaces/GraphQLType.php',
    'AxeWP\\GraphQL\\Interfaces\\Hookable' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Interfaces/Hookable.php',
    'AxeWP\\GraphQL\\Interfaces\\TypeWithConnections' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithConnections.php',
    'AxeWP\\GraphQL\\Interfaces\\TypeWithFields' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithFields.php',
    'AxeWP\\GraphQL\\Interfaces\\TypeWithInputFields' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithInputFields.php',
    'AxeWP\\GraphQL\\Interfaces\\TypeWithInterfaces' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithInterfaces.php',
    'AxeWP\\GraphQL\\Traits\\TypeNameTrait' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Traits/TypeNameTrait.php',
    'AxeWP\\GraphQL\\Traits\\TypeResolverTrait' => $vendorDir . '/justlevine/wp-graphql-plugin-boilerplate/src/Traits/TypeResolverTrait.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'WPGraphQL\\RankMath\\Admin\\Settings\\Settings' => $baseDir . '/src/Admin/Settings/Settings.php',
    'WPGraphQL\\RankMath\\CoreSchemaFilters' => $baseDir . '/src/CoreSchemaFilters.php',
    'WPGraphQL\\RankMath\\Fields\\RootQuery' => $baseDir . '/src/Fields/RootQuery.php',
    'WPGraphQL\\RankMath\\Main' => $baseDir . '/src/Main.php',
    'WPGraphQL\\RankMath\\Model\\ContentNodeSeo' => $baseDir . '/src/Model/ContentNodeSeo.php',
    'WPGraphQL\\RankMath\\Model\\ContentTypeSeo' => $baseDir . '/src/Model/ContentTypeSeo.php',
    'WPGraphQL\\RankMath\\Model\\Seo' => $baseDir . '/src/Model/Seo.php',
    'WPGraphQL\\RankMath\\Model\\Settings' => $baseDir . '/src/Model/Settings.php',
    'WPGraphQL\\RankMath\\Model\\TermNodeSeo' => $baseDir . '/src/Model/TermNodeSeo.php',
    'WPGraphQL\\RankMath\\Model\\UserSeo' => $baseDir . '/src/Model/UserSeo.php',
    'WPGraphQL\\RankMath\\TypeRegistry' => $baseDir . '/src/TypeRegistry.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\ArticleTypeEnum' => $baseDir . '/src/Type/Enum/ArticleTypeEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\BulkEditingTypeEnum' => $baseDir . '/src/Type/Enum/BulkEditingTypeEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\ImagePreviewSizeEnum' => $baseDir . '/src/Type/Enum/ImagePreviewSizeEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\KnowledgeGraphTypeEnum' => $baseDir . '/src/Type/Enum/KnowledgeGraphTypeEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\RobotsMetaValueEnum' => $baseDir . '/src/Type/Enum/RobotsMetaValueEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\SeoRatingEnum' => $baseDir . '/src/Type/Enum/SeoRatingEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\SeoScorePositionEnum' => $baseDir . '/src/Type/Enum/SeoScorePositionEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\SeoScoreTemplateTypeEnum' => $baseDir . '/src/Type/Enum/SeoScoreTemplateTypeEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\SnippetTypeEnum' => $baseDir . '/src/Type/Enum/SnippetTypeEnum.php',
    'WPGraphQL\\RankMath\\Type\\Enum\\TwitterCardTypeEnum' => $baseDir . '/src/Type/Enum/TwitterCardTypeEnum.php',
    'WPGraphQL\\RankMath\\Type\\WPInterface\\BaseSeoFields' => $baseDir . '/src/Type/WPInterface/BaseSeoFields.php',
    'WPGraphQL\\RankMath\\Type\\WPInterface\\MetaSettingWithArchive' => $baseDir . '/src/Type/WPInterface/MetaSettingWithArchive.php',
    'WPGraphQL\\RankMath\\Type\\WPInterface\\MetaSettingWithRobots' => $baseDir . '/src/Type/WPInterface/MetaSettingWithRobots.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\AdvancedRobotsMeta' => $baseDir . '/src/Type/WPObject/AdvancedRobotsMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\ContentNodeSeo' => $baseDir . '/src/Type/WPObject/ContentNodeSeo.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\JsonLd' => $baseDir . '/src/Type/WPObject/JsonLd.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\NodeSeo' => $baseDir . '/src/Type/WPObject/NodeSeo.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\SeoScore' => $baseDir . '/src/Type/WPObject/SeoScore.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings' => $baseDir . '/src/Type/WPObject/Settings.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General' => $baseDir . '/src/Type/WPObject/Settings/General.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\Breadcrumbs' => $baseDir . '/src/Type/WPObject/Settings/General/Breadcrumbs.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\FrontendSeoScore' => $baseDir . '/src/Type/WPObject/Settings/General/FrontendSeoScore.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\Links' => $baseDir . '/src/Type/WPObject/Settings/General/Links.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\Webmaster' => $baseDir . '/src/Type/WPObject/Settings/General/Webmaster.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta' => $baseDir . '/src/Type/WPObject/Settings/Meta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\AuthorArchiveMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/AuthorArchiveMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\ContentTypeMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/ContentTypeMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\DateArchiveMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/DateArchiveMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\GlobalMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/GlobalMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\HomepageMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/HomepageMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\LocalMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/LocalMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\SocialMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/SocialMeta.php',
    'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\TaxonomyMeta' => $baseDir . '/src/Type/WPObject/Settings/Meta/TaxonomyMeta.php',
    'WPGraphQL\\RankMath\\Utils\\Paper' => $baseDir . '/src/Utils/Paper.php',
    'WPGraphQL\\RankMath\\Utils\\Utils' => $baseDir . '/src/Utils/Utils.php',
);