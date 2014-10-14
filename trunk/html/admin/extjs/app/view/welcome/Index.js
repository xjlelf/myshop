/**
 * 功能一栏
 */
Ext.define('CMS.view.welcome.Index', {

    //继承
    extend: 'Ext.panel.Panel',

    //名称自定义
    alias: 'widget.welcomeindex',

    //布局类型
    layout: 'border',

    //子项
    items: [{
    	region: 'north',
    	xtype: 'panel',
    	layout: 'border',
    	height: 50,
    	border: false,
    	items: [{
    		id: 'logininfo',
    		region: 'east',
    		xtype: 'panel',
    		baseCls: 'x-panel-default',
    		layout: {
				type: 'hbox',
				align: 'middle'
			},
    		border: false,
    		width: '20%',
    		items: [{
    			xtype: 'label',
    			text: '欢迎您，' + ADMIN_NAME,
    			margins: '0 10px 0 0'
    		}, {    		
    			xtype: 'button',
    			icon: ConstDefine.COMMON_ICONS_PATH + 'circular/power_off.png',
    			text: '退出',
                handler: function() {
                    //登出事件
                    Ext.Msg.show({
                        title: '系统提示',
                        msg: '确定退出登录吗？',
                        buttons: Ext.Msg.YESNO,
                        icon: Ext.Msg.INFO,
                        fn: function(btnId) {
                            if (btnId == 'yes') {
                                window.location = '/admin/Managers/logout';
                            }
                        }
                    });
                }
    		}]
    	}, {
    		region: 'center',
    		xtype: 'panel',
    		layout: 'border',
    		border: false,
            html: '<h1 style=color:#5e96db>' + ConstDefine.TITLE.PROJECT + '</h1>'
    	}]
    }, {
        title: '系统菜单',
        region: 'west',
        xtype: 'panel',
        width: '20%',
        split: true,//可以拖动
        collapsible: true,//可以最小化
        layout: 'fit',
        items: [{
            xtype: 'menuslist'
        }]
    }, {
    	id: 'main',
        region: 'center',
        xtype: 'tabpanel',
        //设置tab的样式
        tabBar: {
		    height : 28,
		    defaults : {
		        height : 24
		    }
		}
    }, {
        id: 'sql',
        region: 'south',
        xtype: 'sqllist',
        split: true,
        collapsible: true,
        height: 200,
        title: 'SQL列表'
    }]
});