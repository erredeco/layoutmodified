# layoutmodified
TYPO3 extension to alter the tt_content layout field behavior


## usage
* install extension
* add TS (include static from extension) BEFORE bhsiteconf
* This extension DON'T ADD any values to layout on the TYPO3 Backend! This means that the values saved will be by default "0", "1", "2"
  It is up to you to write the proper Page TSConfig
  
Note that the TS Setup added is:
``` 
lib.fluidContent{
  dataProcessing.99 = TYPO3\CMS\Frontend\DataProcessing\SplitProcessor
  dataProcessing.99{
     if.isTrue.field = layout
     delimiter =,
     removeEmptyEntries = 1
     fieldName = layout     
     as = splitlayout
  }
}
```  
So please, use a different position for the dataProcessing array if 99 is already in use! 

An example:

```
TCEFORM {
	tt_content {
		//remove h1, default is already h2.
		header_layout {
			removeItems = 1
		}

		layout {
      //remove in general
      removeItems = 0,1,2,3
      disableNoMatchingValueElement = 1
      addItems{
        default = LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.default
      }
      types {
      	//textmedia
      	textmedia {
		      //must be repeated as far as I can see!
          removeItems = 0,1,2,3
		      addItems {
            customstyle1 = LLL:EXT:bhsiteconf/Resources/Private/Language/locallang_db.xlf:textmedia.layout.style1
            customstyle2 = LLL:EXT:bhsiteconf/Resources/Private/Language/locallang_db.xlf:textmedia.layout.style2
			     }
      	}
      }
		}
	}
}
```  
  
