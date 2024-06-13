import { TagInputComponent } from 'ngx-chips';
import { DataTypeFormatter } from '../../../../services/formatters/data-type.formatter.service';
import { BaseEnumComponent } from '../../../base/base-enum.component';
import { LanguageStore } from '../../../../store/language/language.store';
import { FieldLogicManager } from '../../../field-logic/field-logic.manager';
import { FieldLogicDisplayManager } from '../../../field-logic-display/field-logic-display.manager';
import * as i0 from "@angular/core";
export declare class DynamicEnumEditFieldComponent extends BaseEnumComponent {
    protected languages: LanguageStore;
    protected typeFormatter: DataTypeFormatter;
    protected logic: FieldLogicManager;
    protected logicDisplay: FieldLogicDisplayManager;
    tag: TagInputComponent;
    constructor(languages: LanguageStore, typeFormatter: DataTypeFormatter, logic: FieldLogicManager, logicDisplay: FieldLogicDisplayManager);
    ngOnInit(): void;
    onAdd(item: any): void;
    onRemove(): void;
    getPlaceholderLabel(): string;
    static ɵfac: i0.ɵɵFactoryDeclaration<DynamicEnumEditFieldComponent, never>;
    static ɵcmp: i0.ɵɵComponentDeclaration<DynamicEnumEditFieldComponent, "scrm-dynamicenum-edit", never, {}, {}, never, never, false, never>;
}
