基础组件
======

## 安装

打开 `composer.json` 找到或创建 `repositories` key，添加VCS资源库。

```
	// ...
	"repositories": [
		// ...
		{
			"type": "vcs",
			"url": "https://github.com/chenhakim/base.git"
		}
	],
	// ...
```

添加依赖包。

```
composer require module/base dev-master
```

## 使用

其余模块 继承Http


## 扩展，基础组件添加

未完待续...