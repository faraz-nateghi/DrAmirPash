<?php

namespace App\Services;

class StructureDataService
{
    public static function handleLogo()
    {
        return \Spatie\SchemaOrg\Schema::imageObject()
            ->{'@id'}(url('/#logo'))
            ->url(url('/wp-content/uploads/2022/05/logo-1.png'))
            ->contentUrl(url('/wp-content/uploads/2022/05/logo-1.png'))
            ->caption('کریپتونگار')
            ->inLanguage('fa-IR')
            ->width(114)
            ->height(27);
    }

    public static function handleOrganization()
    {
        return \Spatie\SchemaOrg\Schema::organization()
            ->{'@id'}(url('/#organization'))
            ->name('کریپتونگار')
            ->url(url('/'))
            ->sameAs([
                'https://www.instagram.com/cryptonegar.mag/',
                'https://www.pinterest.com/cryptonegarmag/_saved/',
                'https://www.youtube.com/channel/UCTcPWD2qVLKllEvWhiNF3GQ',
            ])
            ->logo(self::handleLogo());
    }

    public static function handleWebSite()
    {
        return \Spatie\SchemaOrg\Schema::webSite()
            ->{'@id'}(url('/#website'))
            ->url(url('/'))
            ->name('کریپتونگار')
            ->publisher(self::handleOrganization())
            ->inLanguage('fa-IR');
    }

    public static function handleImageObject($image)
    {
        return \Spatie\SchemaOrg\Schema::imageObject()
            ->{'@id'}(url('/#logo'))
            ->url(url($image))
            ->inLanguage('fa-IR');
    }

    public static function handlePerson($user)
    {
        return \Spatie\SchemaOrg\Schema::person()
            ->{'@id'}(route('author.index', $user->alias))
            ->name($user->name)
            ->url(route('author.index', $user->alias))
            ->worksFor(self::handleOrganization());
    }

    public static function handleArticleBreadcrumbList($article)
    {
        return \Spatie\SchemaOrg\Schema::breadcrumbList()
            ->{'@id'}(url($article->alias) . '/#breadcrumb')
            ->itemListElement([
                \Spatie\SchemaOrg\Schema::listItem()
                    ->position(1)
                    ->item(
                        \Spatie\SchemaOrg\Schema::thing()
                            ->{'@id'}(url('/'))
                            ->name('خانه')
                    ),
                \Spatie\SchemaOrg\Schema::listItem()
                    ->position(2)
                    ->item(
                        \Spatie\SchemaOrg\Schema::thing()
                            ->{'@id'}(url('category/' . $article->mainCategory()->alias))
                            ->name($article->mainCategory()->title)
                    ),
                \Spatie\SchemaOrg\Schema::listItem()
                    ->position(3)
                    ->item(
                        \Spatie\SchemaOrg\Schema::thing()
                            ->{'@id'}(url($article->alias))
                            ->name($article->title)
                    ),
            ]);

    }

    public static function handleCategoryBreadcrumbList($category)
    {
        return \Spatie\SchemaOrg\Schema::breadcrumbList()
            ->{'@id'}(url()->current() . '#breadcrumb')
            ->itemListElement([
                \Spatie\SchemaOrg\Schema::listItem()
                    ->position(1)
                    ->item(\Spatie\SchemaOrg\Schema::thing()->{'@id'}(url('/'))->name('خانه')),
                \Spatie\SchemaOrg\Schema::listItem()
                    ->position(2)
                    ->item(\Spatie\SchemaOrg\Schema::thing()->{'@id'}(url()->current())->name($category->title)),
            ]);
    }

    public static function handleAuthorBreadcrumbList()
    {
        return \Spatie\SchemaOrg\Schema::breadcrumbList()
            ->{'@id'}(url()->current() . '#breadcrumb')
            ->itemListElement([
                \Spatie\SchemaOrg\Schema::listItem()
                    ->position(1)
                    ->item(\Spatie\SchemaOrg\Schema::thing()->{'@id'}(url('/'))->name('خانه'))
            ]);
    }

    public static function handleArticleWebPage($article)
    {
        return \Spatie\SchemaOrg\Schema::webPage()
            ->{'@id'}(route('category.index', $article->alias))
            ->url(route('category.index', $article->alias))
            ->name($article->title)
            ->datePublished($article->created_at->toString())
            ->dateModified($article->updated_at->toString())
            ->inLanguage('fa-IR')
            ->isPartOf(self::handleWebSite())
//            ->primaryImageOfPage(self::handleImageObject($article->old_image))
            ->breadcrumb(self::handleArticleBreadcrumbList($article));
    }

    public static function handleProfilePage($author)
    {
        return \Spatie\SchemaOrg\Schema::profilePage()
            ->{'@id'}(route('author.index', $author->name) . '#webpage')
            ->url(route('author.index', $author->name))
            ->name($author->name . ', نویسنده در کریپتونگار')
            ->isPartOf(self::handleWebSite())
            ->inLanguage('fa-IR')
            ->breadcrumb(self::handleAuthorBreadcrumbList());
    }

    public static function handleCollectionPage($category)
    {
        return \Spatie\SchemaOrg\Schema::collectionPage()
            ->id(url()->current() . '#webpage')
            ->url(url()->current())
            ->name($category->title)
            ->isPartOf(self::handleWebSite())
            ->inLanguage('fa-IR')
            ->breadcrumb(self::handleCategoryBreadcrumbList($category));
    }

    public static function articleStructureData($article)
    {

        $schemaGraph = new \Spatie\SchemaOrg\Graph();
        $schemaGraph->add(self::handleOrganization());
        $schemaGraph->add(self::handleWebSite());
//        $schemaGraph->add(self::handleImageObject($article->old_image));
        $schemaGraph->add(self::handleArticleBreadcrumbList($article));
        $schemaGraph->add(self::handleArticleWebPage($article));
        $schemaGraph->add(self::handlePerson($article->author));
        return $schemaGraph->toScript();
    }

    public static function categoryStructureData($category)
    {

        $schemaGraph = new \Spatie\SchemaOrg\Graph();

        $schemaGraph->add(self::handleOrganization());
        $schemaGraph->add(self::handleWebSite());
        $schemaGraph->add(self::handleCategoryBreadcrumbList($category));
        $schemaGraph->add(self::handleCollectionPage($category));


        return $schemaGraph->toScript();
    }

    public static function authorStructureData($author)
    {

        $schemaGraph = new \Spatie\SchemaOrg\Graph();

        $schemaGraph->add(self::handleOrganization());
        $schemaGraph->add(self::handleWebSite());
        $schemaGraph->add(self::handleAuthorBreadcrumbList());
        $schemaGraph->add(self::handleProfilePage($author));
        $schemaGraph->add(self::handlePerson($author));

        return $schemaGraph->toScript();
    }
}
