<?php

namespace HtmlConstructor\Traits;

trait Download {

    static $CROSSORIGIN_ANONYMOUS = "anonymous";
    static $CROSSORIGIN_USE_CREDENTIALS = "use-credentials";

    static $IMPORTANCE_AUTO = "auto";
    static $IMPORTANCE_HIGH = "high";
    static $IMPORTANCE_LOW = "low";

    static $REFERRERPOLICY_NO_REFERRER = "no-referrer";
    static $REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = "no-referrer-when-downgrade";
    static $REFERRERPOLICY_ORIGIN = "origin";
    static $REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = "origin-when-cross-origin";
    static $REFERRERPOLICY_UNSAFE_URL = "unsafe-url";

    /**
     * Set crossorigin attribute
     * @param self::$CROSSORIGIN_*|string $crossorigin
     * @return $this
     */
    function crossorigin($crossorigin) {
        $this->arParams["attributes"]["crossorigin"] = $crossorigin;
        return $this;
    }

    /**
     * Set importance attribute
     * @param self::$IMPORTANCE_*|string $importance
     * @return $this
     */
    function importance($importance) {
        $this->arParams["attributes"]["importance"] = $importance;
        return $this;
    }


    /**
     * Set referrerpolicy attribute
     * @param self::$REFERRERPOLICY_*|string $referrerpolicy
     * @return $this
     */
    function referrerpolicy($referrerpolicy) {
        $this->arParams["attributes"]["intrinsicsize"] = $referrerpolicy;
        return $this;
    }

}