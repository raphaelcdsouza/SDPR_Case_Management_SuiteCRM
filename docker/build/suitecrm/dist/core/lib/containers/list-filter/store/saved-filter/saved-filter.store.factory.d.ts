import { RecordFetchGQL } from '../../../../store/record/graphql/api.record.get';
import { AppStateStore } from '../../../../store/app-state/app-state.store';
import { LanguageStore } from '../../../../store/language/language.store';
import { MessageService } from '../../../../services/message/message.service';
import { RecordManager } from '../../../../services/record/record.manager';
import { SavedFilterStore } from './saved-filter.store';
import { MetadataStore } from '../../../../store/metadata/metadata.store.service';
import { SavedFilterSaveGQL } from './graphql/api.saved-filters.save';
import { RecordMapperRegistry } from 'common';
import { BaseSaveRecordMapper } from '../../../../store/record/record-mappers/base-save.record-mapper';
import { SavedSearchRecordMapper } from './record-mappers/saved-search.record-mapper';
import { FieldManager } from '../../../../services/record/field/field.manager';
import { SavedFilterRecordStoreFactory } from './saved-filter-record.store.factory';
import * as i0 from "@angular/core";
export declare class SaveFilterStoreFactory {
    protected recordFetchGQL: RecordFetchGQL;
    protected recordSaveGQL: SavedFilterSaveGQL;
    protected appStateStore: AppStateStore;
    protected languageStore: LanguageStore;
    protected metadataStore: MetadataStore;
    protected message: MessageService;
    protected recordManager: RecordManager;
    protected fieldManager: FieldManager;
    protected recordMappers: RecordMapperRegistry;
    protected baseMapper: BaseSaveRecordMapper;
    protected savedSearchMapper: SavedSearchRecordMapper;
    protected savedFilterStoreFactory: SavedFilterRecordStoreFactory;
    constructor(recordFetchGQL: RecordFetchGQL, recordSaveGQL: SavedFilterSaveGQL, appStateStore: AppStateStore, languageStore: LanguageStore, metadataStore: MetadataStore, message: MessageService, recordManager: RecordManager, fieldManager: FieldManager, recordMappers: RecordMapperRegistry, baseMapper: BaseSaveRecordMapper, savedSearchMapper: SavedSearchRecordMapper);
    create(): SavedFilterStore;
    static ɵfac: i0.ɵɵFactoryDeclaration<SaveFilterStoreFactory, never>;
    static ɵprov: i0.ɵɵInjectableDeclaration<SaveFilterStoreFactory>;
}
