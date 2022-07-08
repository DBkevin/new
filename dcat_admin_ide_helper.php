<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection dirname
     * @property Grid\Column|Collection picture
     * @property Grid\Column|Collection topic_id
     * @property Grid\Column|Collection effect
     * @property Grid\Column|Collection merit
     * @property Grid\Column|Collection defect
     * @property Grid\Column|Collection crowd
     * @property Grid\Column|Collection risk
     * @property Grid\Column|Collection age
     * @property Grid\Column|Collection introduce
     * @property Grid\Column|Collection school
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection site
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection methods
     * @property Grid\Column|Collection count
     * @property Grid\Column|Collection keep
     * @property Grid\Column|Collection narcosis
     * @property Grid\Column|Collection materials
     * @property Grid\Column|Collection lengthofstay
     * @property Grid\Column|Collection removethetime
     * @property Grid\Column|Collection operationtime
     * @property Grid\Column|Collection swellingtime
     * @property Grid\Column|Collection removetime
     * @property Grid\Column|Collection material
     * @property Grid\Column|Collection plan
     * @property Grid\Column|Collection nurse
     * @property Grid\Column|Collection sideeffects
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection seotitle
     * @property Grid\Column|Collection keyword
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection is
     * @property Grid\Column|Collection keywords
     * @property Grid\Column|Collection oneid
     * @property Grid\Column|Collection twoid
     * @property Grid\Column|Collection info1
     * @property Grid\Column|Collection info2
     * @property Grid\Column|Collection info3
     * @property Grid\Column|Collection info4
     * @property Grid\Column|Collection info5
     * @property Grid\Column|Collection info6
     * @property Grid\Column|Collection info7
     * @property Grid\Column|Collection info8
     * @property Grid\Column|Collection info9
     * @property Grid\Column|Collection intprice
     * @property Grid\Column|Collection intoperation
     * @property Grid\Column|Collection intswelling
     * @property Grid\Column|Collection intremove
     * @property Grid\Column|Collection intmaterial
     * @property Grid\Column|Collection comeffect
     * @property Grid\Column|Collection commerit
     * @property Grid\Column|Collection comdefect
     * @property Grid\Column|Collection comcrowd
     * @property Grid\Column|Collection comrisk
     * @property Grid\Column|Collection notpaln
     * @property Grid\Column|Collection notnurse
     * @property Grid\Column|Collection notsideeffects
     * @property Grid\Column|Collection one
     * @property Grid\Column|Collection two
     * @property Grid\Column|Collection three
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection dirname(string $label = null)
     * @method Grid\Column|Collection picture(string $label = null)
     * @method Grid\Column|Collection topic_id(string $label = null)
     * @method Grid\Column|Collection effect(string $label = null)
     * @method Grid\Column|Collection merit(string $label = null)
     * @method Grid\Column|Collection defect(string $label = null)
     * @method Grid\Column|Collection crowd(string $label = null)
     * @method Grid\Column|Collection risk(string $label = null)
     * @method Grid\Column|Collection age(string $label = null)
     * @method Grid\Column|Collection introduce(string $label = null)
     * @method Grid\Column|Collection school(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection site(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection methods(string $label = null)
     * @method Grid\Column|Collection count(string $label = null)
     * @method Grid\Column|Collection keep(string $label = null)
     * @method Grid\Column|Collection narcosis(string $label = null)
     * @method Grid\Column|Collection materials(string $label = null)
     * @method Grid\Column|Collection lengthofstay(string $label = null)
     * @method Grid\Column|Collection removethetime(string $label = null)
     * @method Grid\Column|Collection operationtime(string $label = null)
     * @method Grid\Column|Collection swellingtime(string $label = null)
     * @method Grid\Column|Collection removetime(string $label = null)
     * @method Grid\Column|Collection material(string $label = null)
     * @method Grid\Column|Collection plan(string $label = null)
     * @method Grid\Column|Collection nurse(string $label = null)
     * @method Grid\Column|Collection sideeffects(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection seotitle(string $label = null)
     * @method Grid\Column|Collection keyword(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection is(string $label = null)
     * @method Grid\Column|Collection keywords(string $label = null)
     * @method Grid\Column|Collection oneid(string $label = null)
     * @method Grid\Column|Collection twoid(string $label = null)
     * @method Grid\Column|Collection info1(string $label = null)
     * @method Grid\Column|Collection info2(string $label = null)
     * @method Grid\Column|Collection info3(string $label = null)
     * @method Grid\Column|Collection info4(string $label = null)
     * @method Grid\Column|Collection info5(string $label = null)
     * @method Grid\Column|Collection info6(string $label = null)
     * @method Grid\Column|Collection info7(string $label = null)
     * @method Grid\Column|Collection info8(string $label = null)
     * @method Grid\Column|Collection info9(string $label = null)
     * @method Grid\Column|Collection intprice(string $label = null)
     * @method Grid\Column|Collection intoperation(string $label = null)
     * @method Grid\Column|Collection intswelling(string $label = null)
     * @method Grid\Column|Collection intremove(string $label = null)
     * @method Grid\Column|Collection intmaterial(string $label = null)
     * @method Grid\Column|Collection comeffect(string $label = null)
     * @method Grid\Column|Collection commerit(string $label = null)
     * @method Grid\Column|Collection comdefect(string $label = null)
     * @method Grid\Column|Collection comcrowd(string $label = null)
     * @method Grid\Column|Collection comrisk(string $label = null)
     * @method Grid\Column|Collection notpaln(string $label = null)
     * @method Grid\Column|Collection notnurse(string $label = null)
     * @method Grid\Column|Collection notsideeffects(string $label = null)
     * @method Grid\Column|Collection one(string $label = null)
     * @method Grid\Column|Collection two(string $label = null)
     * @method Grid\Column|Collection three(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection dirname
     * @property Show\Field|Collection picture
     * @property Show\Field|Collection topic_id
     * @property Show\Field|Collection effect
     * @property Show\Field|Collection merit
     * @property Show\Field|Collection defect
     * @property Show\Field|Collection crowd
     * @property Show\Field|Collection risk
     * @property Show\Field|Collection age
     * @property Show\Field|Collection introduce
     * @property Show\Field|Collection school
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection site
     * @property Show\Field|Collection price
     * @property Show\Field|Collection methods
     * @property Show\Field|Collection count
     * @property Show\Field|Collection keep
     * @property Show\Field|Collection narcosis
     * @property Show\Field|Collection materials
     * @property Show\Field|Collection lengthofstay
     * @property Show\Field|Collection removethetime
     * @property Show\Field|Collection operationtime
     * @property Show\Field|Collection swellingtime
     * @property Show\Field|Collection removetime
     * @property Show\Field|Collection material
     * @property Show\Field|Collection plan
     * @property Show\Field|Collection nurse
     * @property Show\Field|Collection sideeffects
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection seotitle
     * @property Show\Field|Collection keyword
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection url
     * @property Show\Field|Collection is
     * @property Show\Field|Collection keywords
     * @property Show\Field|Collection oneid
     * @property Show\Field|Collection twoid
     * @property Show\Field|Collection info1
     * @property Show\Field|Collection info2
     * @property Show\Field|Collection info3
     * @property Show\Field|Collection info4
     * @property Show\Field|Collection info5
     * @property Show\Field|Collection info6
     * @property Show\Field|Collection info7
     * @property Show\Field|Collection info8
     * @property Show\Field|Collection info9
     * @property Show\Field|Collection intprice
     * @property Show\Field|Collection intoperation
     * @property Show\Field|Collection intswelling
     * @property Show\Field|Collection intremove
     * @property Show\Field|Collection intmaterial
     * @property Show\Field|Collection comeffect
     * @property Show\Field|Collection commerit
     * @property Show\Field|Collection comdefect
     * @property Show\Field|Collection comcrowd
     * @property Show\Field|Collection comrisk
     * @property Show\Field|Collection notpaln
     * @property Show\Field|Collection notnurse
     * @property Show\Field|Collection notsideeffects
     * @property Show\Field|Collection one
     * @property Show\Field|Collection two
     * @property Show\Field|Collection three
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection dirname(string $label = null)
     * @method Show\Field|Collection picture(string $label = null)
     * @method Show\Field|Collection topic_id(string $label = null)
     * @method Show\Field|Collection effect(string $label = null)
     * @method Show\Field|Collection merit(string $label = null)
     * @method Show\Field|Collection defect(string $label = null)
     * @method Show\Field|Collection crowd(string $label = null)
     * @method Show\Field|Collection risk(string $label = null)
     * @method Show\Field|Collection age(string $label = null)
     * @method Show\Field|Collection introduce(string $label = null)
     * @method Show\Field|Collection school(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection site(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection methods(string $label = null)
     * @method Show\Field|Collection count(string $label = null)
     * @method Show\Field|Collection keep(string $label = null)
     * @method Show\Field|Collection narcosis(string $label = null)
     * @method Show\Field|Collection materials(string $label = null)
     * @method Show\Field|Collection lengthofstay(string $label = null)
     * @method Show\Field|Collection removethetime(string $label = null)
     * @method Show\Field|Collection operationtime(string $label = null)
     * @method Show\Field|Collection swellingtime(string $label = null)
     * @method Show\Field|Collection removetime(string $label = null)
     * @method Show\Field|Collection material(string $label = null)
     * @method Show\Field|Collection plan(string $label = null)
     * @method Show\Field|Collection nurse(string $label = null)
     * @method Show\Field|Collection sideeffects(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection seotitle(string $label = null)
     * @method Show\Field|Collection keyword(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection is(string $label = null)
     * @method Show\Field|Collection keywords(string $label = null)
     * @method Show\Field|Collection oneid(string $label = null)
     * @method Show\Field|Collection twoid(string $label = null)
     * @method Show\Field|Collection info1(string $label = null)
     * @method Show\Field|Collection info2(string $label = null)
     * @method Show\Field|Collection info3(string $label = null)
     * @method Show\Field|Collection info4(string $label = null)
     * @method Show\Field|Collection info5(string $label = null)
     * @method Show\Field|Collection info6(string $label = null)
     * @method Show\Field|Collection info7(string $label = null)
     * @method Show\Field|Collection info8(string $label = null)
     * @method Show\Field|Collection info9(string $label = null)
     * @method Show\Field|Collection intprice(string $label = null)
     * @method Show\Field|Collection intoperation(string $label = null)
     * @method Show\Field|Collection intswelling(string $label = null)
     * @method Show\Field|Collection intremove(string $label = null)
     * @method Show\Field|Collection intmaterial(string $label = null)
     * @method Show\Field|Collection comeffect(string $label = null)
     * @method Show\Field|Collection commerit(string $label = null)
     * @method Show\Field|Collection comdefect(string $label = null)
     * @method Show\Field|Collection comcrowd(string $label = null)
     * @method Show\Field|Collection comrisk(string $label = null)
     * @method Show\Field|Collection notpaln(string $label = null)
     * @method Show\Field|Collection notnurse(string $label = null)
     * @method Show\Field|Collection notsideeffects(string $label = null)
     * @method Show\Field|Collection one(string $label = null)
     * @method Show\Field|Collection two(string $label = null)
     * @method Show\Field|Collection three(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
