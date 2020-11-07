
 (function(){

    angular
        .module('movecalc')

    .constant('config', {
    appName: 'movecalc',
    appVersion: 1.0,
    host: 'https://assertivemoving.com/',
    serverUrl: 'https://api.assertivemoving.com/'
    })


    .config(function(AnalyticsProvider,$httpProvider) {
        // initial configuration

      AnalyticsProvider.setAccount('');
        AnalyticsProvider.trackPages(true);
        AnalyticsProvider.trackUrlParams(true);
        AnalyticsProvider.useDisplayFeatures(true);
        AnalyticsProvider.useAnalytics(true);
        AnalyticsProvider.ignoreFirstPageLoad(true);
        AnalyticsProvider.useEnhancedLinkAttribution(true);
        AnalyticsProvider.setExperimentId('12345');
        $httpProvider.interceptors.push('sessionInjector');

        })


    /* @ngInject */

    .factory('sessionInjector',['Session',function(Session) {
        var sessionInjector = {
            request: function(config) {

                config.headers['X-CSRF-Token'] = Session.getToken();

                return config;

            }
        };
        return sessionInjector;
    }]);






})();
